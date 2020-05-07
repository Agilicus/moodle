<?php

define('CLI_SCRIPT', true);

require(__DIR__.'/../../config.php');
require_once($CFG->libdir.'/clilib.php');
require_once(__DIR__ . '/../tool/objectfs/lib.php');

$help =
"clean the hvp cache of any files that aren't in storage or remote.";

// Now get cli options.
list($options, $unrecognized) = cli_get_params(
    array(),
    array('h'=>'help')
);

if ($options['help']) {
    echo $help;
    die;
}

echo "hvp cache\n";
$fields = 'distinct h.id';
$from = "{files} f LEFT JOIN {tool_objectfs_objects} o on f.contenthash = o.contenthash LEFT JOIN {hvp_libraries_cachedassets} h on h.hash = regexp_replace(f.filename, '\.(.*)', '')";
$where = 'o.location = ?';
$params = [OBJECT_LOCATION_ERROR];

$sql = "SELECT 
{$fields}
FROM {$from}
WHERE {$where}";

$rawdata = $DB->get_records_sql($sql, $params);

echo 'drop missing cache files\n';
foreach($rawdata as $entry) {
    echo 'drop' . $entry->id . "\n";
    $DB->delete_records('hvp_libraries_cachedassets', array('id'=>$entry->id));
}