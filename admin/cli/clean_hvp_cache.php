<?php

define('CLI_SCRIPT', true);

require(__DIR__.'/../../config.php');
require_once($CFG->libdir.'/clilib.php');


$help =
"clean the hvp cache of any files that aren't in storage or remote.

Options:
--run                       Execute clean. If this option is not set, then the script will be run in a dry mode.";

// Now get cli options.
list($options, $unrecognized) = cli_get_params(
    array('run' => false, 'help' => false),
    array('h'=>'help')
);

if ($options['help']) {
    echo $help;
    die;
}


function get_drop_query_from_idlist($array) {
    return 'id in (' . implode(',', $array) . ')';
}

function get_drop_query($query_result, $category) {
    $to_drop = array();

    foreach($query_result as $hvp_entry) {
        array_push($to_drop, $hvp_entry->$category);
    }

    // this removes duplicate entries
    $to_drop = array_combine($to_drop, $to_drop);
    return get_drop_query_from_idlist($to_drop);
}

// for entries with more than one id in them
function get_drop_query_list($query_result, $category) {
    $to_drop = array();

    foreach($query_result as $hvp_entry) {
        $list = trim($hvp_entry->$category, "{}");
        $toadd =  explode(',', $list);
        foreach($toadd as $add) {
            array_push($to_drop, $add);
        }
    }

    $to_drop = array_combine($to_drop, $to_drop);
    return 'id in (' . implode(',', $to_drop) . ')';
}

try {


    $transaction = $DB->start_delegated_transaction();

    echo "hvp cache\n";
    $fields = 'o.id as objectfsids,
               f.id as fileid,
               f.contenthash as contenthash,
               f.pathnamehash as pathnamehash, 
               f.filename as filename,
               array_agg(h.id) as hvp_cache_ids' ;
    $from = "{files} f RIGHT JOIN {tool_objectfs_objects} o ON f.contenthash = o.contenthash RIGHT JOIN {hvp_libraries_cachedassets} h on h.hash = regexp_replace(f.filename, '\.(.*)', '')";
    $where = 'o.location = ? GROUP BY f.id, o.id, f.contenthash, f.pathnamehash, f.filename';
    $params = ['-1'];

    $sql = "SELECT 
    {$fields}
    FROM {$from}
    WHERE {$where}";

    $rawdata = $DB->get_records_sql($sql, $params);

    if (!$rawdata) {
        echo "nothing to clean!";
        $transaction->allow_commit();
        exit;
    }

    if( $options['run'] ){
        echo "dropping the following from mdl_files and mdl_h5p_libraries_cachedassets:\n";
    }
    else {
        echo "would drop the following:\n";
    }

    foreach($rawdata as $entry) {
    
        echo print_r($entry, true);
    }

    if( !$options['run'] ){
        $transaction->allow_commit();
    } else {

        echo "dropping from mdl_files\n";
        $file_delete_query = get_drop_query($rawdata, 'fileid');
        echo $file_delete_query . "\n";
        $DB->delete_records_select('files', $file_delete_query);

        echo "dropping from mdl_h5p_libraries_cachedassets\n";
        $hvp_delete_query = get_drop_query_list($rawdata, 'hvp_cache_ids');
        echo $hvp_delete_query . "\n";
        $DB->delete_records_select('h5p_libraries_cachedassets', $hvp_delete_query);

        echo "dropping from mdl_tool_objectfs_objects\n";
        $object_delete_query = get_drop_query($rawdata, 'objectfsids');
        echo $object_delete_query . "\n";
        $DB->delete_records_select('hvp_libraries_cachedassets', $object_delete_query);


        $transaction->allow_commit();
    }


} catch (Exception $e) {
    //extra cleanup steps
    $transaction->rollback($e); // rethrows exception
}
