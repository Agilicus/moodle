<?php

define('CLI_SCRIPT', true);

require(__DIR__.'/../../config.php');
require_once($CFG->libdir.'/clilib.php');

$help =
"helper tool to manually add existing users to companies.

Site defaults may be changed via local/defaults.php.

Options:
--user=''             email of the user to add. Must already exist.
--company=''          full url of the company to add the user to
--role='user'     type of user, options are admin,instructor,manager,user
-h, --help            prints this message

Example:
\$php admin/cli/add_user_to_company --user=username@email.com --company=full.url.for.company
";

        /**
     * sets a user with the appropriate company access levels
     *
     * @param int $userid
     * @param string $companyname short name of the company to assign to
     * @param array  $companymap array with roles as keys and values as boolean
     */
    function set_access($userid, $companyname, $companymap) {
        global $DB;

        # for most roles this is automatically signed appropriatly
        $educator = false;
        if ($companymap['ignore']) {
            error_log('ignore');
            return;
        }
        if ($companymap['admin']) {
            error_log('admin');
            $usertype = 1;
        }
        else if ( $companymap['instructor'] ) {
            # instructor is manager+educator
            error_log('instructor');
            $usertype = 2;
            $educator = true;
        }
        else if ( $companymap['manager'] ) {
            error_log('manager');
            $usertype = 2;
        }
        else {
            error_log('user');
            $usertype = 0;
        }

        $companyid = $DB->get_field_sql('SELECT id FROM mdl_company WHERE name=?', array($companyname));
        $companyshortname = $DB->get_field_sql('SELECT shortname FROM mdl_company WHERE name=?', array($companyname));

        $company = new \company($companyid);
        $department = \company::get_company_parentnode($companyid);

        $company->assign_user_to_company($userid);

        \company::upsert_company_user($userid, $companyid, $department->id, $usertype, $educator);
    }



// Now get cli options.
list($options, $unrecognized) = cli_get_params(
    array('user'=>'','company'=>'', 'role'=>'user', 'help'=> false),
    array('h'=>'help')
);

if ($options['help']) {
    echo $help;
    die;
}

if (! ($options['user'] or $options['company'])) {
    echo "must choose company and user!\n";
    echo $help;
    die;
}

$user = $DB->get_record("user", array('email' => $options['user']));
set_access($user->id, $options['company'], array($options['role']));