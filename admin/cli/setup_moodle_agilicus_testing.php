<?php

define('CLI_SCRIPT', true);

require(__DIR__.'/../../config.php');
require_once($CFG->libdir.'/clilib.php');

$help =
"helper to bootstrap moodle once db and object bootstrapping is done
";

// Now get cli options.
list($options, $unrecognized) = cli_get_params(
    array(),
    array('h'=>'help')
);

if ($options['help']) {
    echo $help;
    die;
}

// sanity check
if (!getenv('DEBUG')) {
    echo "debug needs to be on in order to run this. Do not run on production site";
    die;
}

echo "un-disable the root user\n";
$DB->set_field('user', 'suspended', 0,  ['id'=>'2']);

echo "setting the root user as admin\n";
$DB->set_field('config', 'value', 2, ['name' => $DB->sql_compare_text('siteadmins')]);

$company = (object) array('name' => 'localhost', 'shortname' => 'localhost', 'hostname'=>'localhost');

echo "create localhost company\n";
$DB->insert_record('company', $company);

echo "reset the cache\n";
purge_caches();


echo "all done! login at lms.localhost, the user is admin and the password can be found with `sops -d --extract '[\"MOODLE_ADMIN_PASSWORD\"]' secrets.enc.yaml`";