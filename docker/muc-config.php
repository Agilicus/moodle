<?php defined('MOODLE_INTERNAL') || die();
 $configuration = array (
  'siteidentifier' => '24c491d1dab906653fabc2a8b5c04dfd',
  'stores' => 
  array (
    'default_application' => 
    array (
      'name' => 'default_application',
      'plugin' => 'file',
      'configuration' => 
      array (
      ),
      'features' => 30,
      'modes' => 3,
      'default' => true,
      'class' => 'cachestore_file',
      'lock' => 'cachelock_file_default',
    ),
    'default_session' => 
    array (
      'name' => 'default_session',
      'plugin' => 'session',
      'configuration' => 
      array (
      ),
      'features' => 14,
      'modes' => 2,
      'default' => true,
      'class' => 'cachestore_session',
      'lock' => 'cachelock_file_default',
    ),
    'default_request' => 
    array (
      'name' => 'default_request',
      'plugin' => 'static',
      'configuration' => 
      array (
      ),
      'features' => 31,
      'modes' => 4,
      'default' => true,
      'class' => 'cachestore_static',
      'lock' => 'cachelock_file_default',
    ),
    'titan' => 
    array (
      'name' => 'titan',
      'plugin' => 'redis',
      'configuration' => 
      array (
        'server' => 'redis:7369',
        'prefix' => '',
        'password' => '',
        'serializer' => '1',
        'compressor' => '0',
      ),
      'features' => 26,
      'modes' => 3,
      'mappingsonly' => false,
      'class' => 'cachestore_redis',
      'default' => false,
      'lock' => 'cachelock_file_default',
    ),
  ),
  'modemappings' => 
  array (
    0 => 
    array (
      'mode' => 1,
      'store' => 'default_application',
      'sort' => -1,
    ),
    1 => 
    array (
      'mode' => 2,
      'store' => 'default_session',
      'sort' => -1,
    ),
    2 => 
    array (
      'mode' => 4,
      'store' => 'default_request',
      'sort' => -1,
    ),
  ),
  'definitions' => 
  array (
    'core/string' => 
    array (
      'mode' => 1,
      'simplekeys' => true,
      'simpledata' => true,
      'staticacceleration' => true,
      'staticaccelerationsize' => 30,
      'canuselocalstore' => true,
      'component' => 'core',
      'area' => 'string',
      'sharingoptions' => 15,
      'selectedsharingoption' => 2,
      'userinputsharingkey' => '',
    ),
    'core/langmenu' => 
    array (
      'mode' => 1,
      'simplekeys' => true,
      'simpledata' => true,
      'staticacceleration' => true,
      'canuselocalstore' => true,
      'component' => 'core',
      'area' => 'langmenu',
      'sharingoptions' => 15,
      'selectedsharingoption' => 2,
      'userinputsharingkey' => '',
    ),
    'core/databasemeta' => 
    array (
      'mode' => 1,
      'requireidentifiers' => 
      array (
        0 => 'dbfamily',
      ),
      'simpledata' => true,
      'staticacceleration' => true,
      'staticaccelerationsize' => 15,
      'component' => 'core',
      'area' => 'databasemeta',
      'sharingoptions' => 15,
      'selectedsharingoption' => 2,
      'userinputsharingkey' => '',
    ),
    'core/eventinvalidation' => 
    array (
      'mode' => 1,
      'staticacceleration' => true,
      'requiredataguarantee' => true,
      'simpledata' => true,
      'component' => 'core',
      'area' => 'eventinvalidation',
      'sharingoptions' => 15,
      'selectedsharingoption' => 2,
      'userinputsharingkey' => '',
    ),
    'core/questiondata' => 
    array (
      'mode' => 1,
      'simplekeys' => true,
      'requiredataguarantee' => false,
      'datasource' => 'question_finder',
      'datasourcefile' => 'question/engine/bank.php',
      'component' => 'core',
      'area' => 'questiondata',
      'sharingoptions' => 15,
      'selectedsharingoption' => 2,
      'userinputsharingkey' => '',
    ),
    'core/htmlpurifier' => 
    array (
      'mode' => 1,
      'canuselocalstore' => true,
      'component' => 'core',
      'area' => 'htmlpurifier',
      'sharingoptions' => 15,
      'selectedsharingoption' => 2,
      'userinputsharingkey' => '',
    ),
    'core/config' => 
    array (
      'mode' => 1,
      'staticacceleration' => true,
      'simpledata' => true,
      'component' => 'core',
      'area' => 'config',
      'sharingoptions' => 15,
      'selectedsharingoption' => 2,
      'userinputsharingkey' => '',
    ),
    'core/groupdata' => 
    array (
      'mode' => 1,
      'simplekeys' => true,
      'simpledata' => true,
      'staticacceleration' => true,
      'staticaccelerationsize' => 2,
      'component' => 'core',
      'area' => 'groupdata',
      'sharingoptions' => 15,
      'selectedsharingoption' => 2,
      'userinputsharingkey' => '',
    ),
    'core/calendar_subscriptions' => 
    array (
      'mode' => 1,
      'simplekeys' => true,
      'simpledata' => true,
      'staticacceleration' => true,
      'component' => 'core',
      'area' => 'calendar_subscriptions',
      'sharingoptions' => 15,
      'selectedsharingoption' => 2,
      'userinputsharingkey' => '',
    ),
    'core/calendar_categories' => 
    array (
      'mode' => 2,
      'simplekeys' => true,
      'simpledata' => true,
      'invalidationevents' => 
      array (
        0 => 'changesincoursecat',
        1 => 'changesincategoryenrolment',
      ),
      'ttl' => 900,
      'component' => 'core',
      'area' => 'calendar_categories',
      'sharingoptions' => 2,
      'selectedsharingoption' => 2,
      'userinputsharingkey' => '',
    ),
    'core/capabilities' => 
    array (
      'mode' => 1,
      'simplekeys' => true,
      'simpledata' => true,
      'staticacceleration' => true,
      'staticaccelerationsize' => 1,
      'ttl' => 3600,
      'component' => 'core',
      'area' => 'capabilities',
      'sharingoptions' => 15,
      'selectedsharingoption' => 2,
      'userinputsharingkey' => '',
    ),
    'core/yuimodules' => 
    array (
      'mode' => 1,
      'component' => 'core',
      'area' => 'yuimodules',
      'sharingoptions' => 15,
      'selectedsharingoption' => 2,
      'userinputsharingkey' => '',
    ),
    'core/observers' => 
    array (
      'mode' => 1,
      'simplekeys' => true,
      'simpledata' => true,
      'staticacceleration' => true,
      'staticaccelerationsize' => 2,
      'component' => 'core',
      'area' => 'observers',
      'sharingoptions' => 15,
      'selectedsharingoption' => 2,
      'userinputsharingkey' => '',
    ),
    'core/plugin_manager' => 
    array (
      'mode' => 1,
      'simplekeys' => true,
      'simpledata' => true,
      'component' => 'core',
      'area' => 'plugin_manager',
      'sharingoptions' => 15,
      'selectedsharingoption' => 2,
      'userinputsharingkey' => '',
    ),
    'core/coursecattree' => 
    array (
      'mode' => 1,
      'staticacceleration' => true,
      'invalidationevents' => 
      array (
        0 => 'changesincoursecat',
      ),
      'component' => 'core',
      'area' => 'coursecattree',
      'sharingoptions' => 15,
      'selectedsharingoption' => 2,
      'userinputsharingkey' => '',
    ),
    'core/coursecat' => 
    array (
      'mode' => 2,
      'invalidationevents' => 
      array (
        0 => 'changesincoursecat',
        1 => 'changesincourse',
      ),
      'ttl' => 600,
      'component' => 'core',
      'area' => 'coursecat',
      'sharingoptions' => 2,
      'selectedsharingoption' => 2,
      'userinputsharingkey' => '',
    ),
    'core/coursecatrecords' => 
    array (
      'mode' => 4,
      'simplekeys' => true,
      'invalidationevents' => 
      array (
        0 => 'changesincoursecat',
      ),
      'component' => 'core',
      'area' => 'coursecatrecords',
      'sharingoptions' => 2,
      'selectedsharingoption' => 2,
      'userinputsharingkey' => '',
    ),
    'core/coursecontacts' => 
    array (
      'mode' => 1,
      'staticacceleration' => true,
      'simplekeys' => true,
      'ttl' => 3600,
      'component' => 'core',
      'area' => 'coursecontacts',
      'sharingoptions' => 15,
      'selectedsharingoption' => 2,
      'userinputsharingkey' => '',
    ),
    'core/repositories' => 
    array (
      'mode' => 4,
      'component' => 'core',
      'area' => 'repositories',
      'sharingoptions' => 2,
      'selectedsharingoption' => 2,
      'userinputsharingkey' => '',
    ),
    'core/externalbadges' => 
    array (
      'mode' => 1,
      'simplekeys' => true,
      'ttl' => 3600,
      'component' => 'core',
      'area' => 'externalbadges',
      'sharingoptions' => 15,
      'selectedsharingoption' => 2,
      'userinputsharingkey' => '',
    ),
    'core/coursemodinfo' => 
    array (
      'mode' => 1,
      'simplekeys' => true,
      'canuselocalstore' => true,
      'component' => 'core',
      'area' => 'coursemodinfo',
      'sharingoptions' => 15,
      'selectedsharingoption' => 2,
      'userinputsharingkey' => '',
    ),
    'core/userselections' => 
    array (
      'mode' => 2,
      'simplekeys' => true,
      'simpledata' => true,
      'component' => 'core',
      'area' => 'userselections',
      'sharingoptions' => 2,
      'selectedsharingoption' => 2,
      'userinputsharingkey' => '',
    ),
    'core/completion' => 
    array (
      'mode' => 1,
      'simplekeys' => true,
      'simpledata' => true,
      'ttl' => 3600,
      'staticacceleration' => true,
      'staticaccelerationsize' => 2,
      'component' => 'core',
      'area' => 'completion',
      'sharingoptions' => 15,
      'selectedsharingoption' => 2,
      'userinputsharingkey' => '',
    ),
    'core/coursecompletion' => 
    array (
      'mode' => 1,
      'simplekeys' => true,
      'simpledata' => true,
      'ttl' => 3600,
      'staticacceleration' => true,
      'staticaccelerationsize' => 30,
      'component' => 'core',
      'area' => 'coursecompletion',
      'sharingoptions' => 15,
      'selectedsharingoption' => 2,
      'userinputsharingkey' => '',
    ),
    'core/navigation_expandcourse' => 
    array (
      'mode' => 2,
      'simplekeys' => true,
      'simpledata' => true,
      'component' => 'core',
      'area' => 'navigation_expandcourse',
      'sharingoptions' => 2,
      'selectedsharingoption' => 2,
      'userinputsharingkey' => '',
    ),
    'core/suspended_userids' => 
    array (
      'mode' => 4,
      'simplekeys' => true,
      'simpledata' => true,
      'component' => 'core',
      'area' => 'suspended_userids',
      'sharingoptions' => 2,
      'selectedsharingoption' => 2,
      'userinputsharingkey' => '',
    ),
    'core/roledefs' => 
    array (
      'mode' => 1,
      'simplekeys' => true,
      'simpledata' => true,
      'staticacceleration' => true,
      'staticaccelerationsize' => 30,
      'component' => 'core',
      'area' => 'roledefs',
      'sharingoptions' => 15,
      'selectedsharingoption' => 2,
      'userinputsharingkey' => '',
    ),
    'core/plugin_functions' => 
    array (
      'mode' => 1,
      'simplekeys' => true,
      'simpledata' => true,
      'staticacceleration' => true,
      'staticaccelerationsize' => 5,
      'component' => 'core',
      'area' => 'plugin_functions',
      'sharingoptions' => 15,
      'selectedsharingoption' => 2,
      'userinputsharingkey' => '',
    ),
    'core/tags' => 
    array (
      'mode' => 4,
      'simplekeys' => true,
      'staticacceleration' => true,
      'component' => 'core',
      'area' => 'tags',
      'sharingoptions' => 2,
      'selectedsharingoption' => 2,
      'userinputsharingkey' => '',
    ),
    'core/grade_categories' => 
    array (
      'mode' => 2,
      'simplekeys' => true,
      'invalidationevents' => 
      array (
        0 => 'changesingradecategories',
      ),
      'component' => 'core',
      'area' => 'grade_categories',
      'sharingoptions' => 2,
      'selectedsharingoption' => 2,
      'userinputsharingkey' => '',
    ),
    'core/temp_tables' => 
    array (
      'mode' => 4,
      'simplekeys' => true,
      'simpledata' => true,
      'component' => 'core',
      'area' => 'temp_tables',
      'sharingoptions' => 2,
      'selectedsharingoption' => 2,
      'userinputsharingkey' => '',
    ),
    'core/tagindexbuilder' => 
    array (
      'mode' => 2,
      'simplekeys' => true,
      'simplevalues' => true,
      'staticacceleration' => true,
      'staticaccelerationsize' => 10,
      'ttl' => 900,
      'invalidationevents' => 
      array (
        0 => 'resettagindexbuilder',
      ),
      'component' => 'core',
      'area' => 'tagindexbuilder',
      'sharingoptions' => 2,
      'selectedsharingoption' => 2,
      'userinputsharingkey' => '',
    ),
    'core/contextwithinsights' => 
    array (
      'mode' => 1,
      'simplekeys' => true,
      'simpledata' => true,
      'staticacceleration' => true,
      'staticaccelerationsize' => 1,
      'component' => 'core',
      'area' => 'contextwithinsights',
      'sharingoptions' => 15,
      'selectedsharingoption' => 2,
      'userinputsharingkey' => '',
    ),
    'core/message_processors_enabled' => 
    array (
      'mode' => 1,
      'simplekeys' => true,
      'simpledata' => true,
      'staticacceleration' => true,
      'staticaccelerationsize' => 3,
      'component' => 'core',
      'area' => 'message_processors_enabled',
      'sharingoptions' => 15,
      'selectedsharingoption' => 2,
      'userinputsharingkey' => '',
    ),
    'core/message_time_last_message_between_users' => 
    array (
      'mode' => 1,
      'simplekeys' => true,
      'simplevalues' => true,
      'datasource' => '\\core_message\\time_last_message_between_users',
      'component' => 'core',
      'area' => 'message_time_last_message_between_users',
      'sharingoptions' => 15,
      'selectedsharingoption' => 2,
      'userinputsharingkey' => '',
    ),
    'core/fontawesomeiconmapping' => 
    array (
      'mode' => 1,
      'simplekeys' => true,
      'simpledata' => true,
      'staticacceleration' => true,
      'staticaccelerationsize' => 1,
      'component' => 'core',
      'area' => 'fontawesomeiconmapping',
      'sharingoptions' => 15,
      'selectedsharingoption' => 2,
      'userinputsharingkey' => '',
    ),
    'core/postprocessedcss' => 
    array (
      'mode' => 1,
      'simplekeys' => true,
      'simpledata' => true,
      'staticacceleration' => false,
      'component' => 'core',
      'area' => 'postprocessedcss',
      'sharingoptions' => 15,
      'selectedsharingoption' => 2,
      'userinputsharingkey' => '',
    ),
    'core/user_group_groupings' => 
    array (
      'mode' => 1,
      'simplekeys' => true,
      'simpledata' => true,
      'staticacceleration' => true,
      'component' => 'core',
      'area' => 'user_group_groupings',
      'sharingoptions' => 15,
      'selectedsharingoption' => 2,
      'userinputsharingkey' => '',
    ),
    'core/presignup' => 
    array (
      'mode' => 2,
      'simplekeys' => true,
      'simpledata' => true,
      'ttl' => 1800,
      'component' => 'core',
      'area' => 'presignup',
      'sharingoptions' => 2,
      'selectedsharingoption' => 2,
      'userinputsharingkey' => '',
    ),
    'core/modelfirstanalyses' => 
    array (
      'mode' => 4,
      'simplekeys' => true,
      'simpledata' => true,
      'component' => 'core',
      'area' => 'modelfirstanalyses',
      'sharingoptions' => 2,
      'selectedsharingoption' => 2,
      'userinputsharingkey' => '',
    ),
    'core/portfolio_add_button_portfolio_instances' => 
    array (
      'mode' => 4,
      'simplekeys' => true,
      'staticacceleration' => true,
      'component' => 'core',
      'area' => 'portfolio_add_button_portfolio_instances',
      'sharingoptions' => 2,
      'selectedsharingoption' => 2,
      'userinputsharingkey' => '',
    ),
    'core/course_user_dates' => 
    array (
      'mode' => 4,
      'simplekeys' => true,
      'simpledata' => true,
      'staticacceleration' => true,
      'component' => 'core',
      'area' => 'course_user_dates',
      'sharingoptions' => 2,
      'selectedsharingoption' => 2,
      'userinputsharingkey' => '',
    ),
    'core/calculablesinfo' => 
    array (
      'mode' => 4,
      'simplekeys' => false,
      'simpledata' => false,
      'component' => 'core',
      'area' => 'calculablesinfo',
      'sharingoptions' => 2,
      'selectedsharingoption' => 2,
      'userinputsharingkey' => '',
    ),
    'availability_grade/scores' => 
    array (
      'mode' => 1,
      'staticacceleration' => true,
      'staticaccelerationsize' => 2,
      'ttl' => 3600,
      'component' => 'availability_grade',
      'area' => 'scores',
      'sharingoptions' => 15,
      'selectedsharingoption' => 2,
      'userinputsharingkey' => '',
    ),
    'availability_grade/items' => 
    array (
      'mode' => 1,
      'staticacceleration' => true,
      'staticaccelerationsize' => 2,
      'ttl' => 3600,
      'component' => 'availability_grade',
      'area' => 'items',
      'sharingoptions' => 15,
      'selectedsharingoption' => 2,
      'userinputsharingkey' => '',
    ),
    'mod_forum/forum_is_tracked' => 
    array (
      'mode' => 4,
      'simplekeys' => true,
      'simpledata' => true,
      'staticacceleration' => true,
      'component' => 'mod_forum',
      'area' => 'forum_is_tracked',
      'sharingoptions' => 2,
      'selectedsharingoption' => 2,
      'userinputsharingkey' => '',
    ),
    'mod_glossary/concepts' => 
    array (
      'mode' => 1,
      'simplekeys' => true,
      'simpledata' => false,
      'staticacceleration' => true,
      'staticaccelerationsize' => 30,
      'component' => 'mod_glossary',
      'area' => 'concepts',
      'sharingoptions' => 15,
      'selectedsharingoption' => 2,
      'userinputsharingkey' => '',
    ),
    'block_iomad_progress/cachedlogs' => 
    array (
      'mode' => 1,
      'simplekeys' => true,
      'simpledata' => true,
      'staticacceleration' => true,
      'invalidationevents' => 
      array (
        0 => 'changesincourse',
      ),
      'component' => 'block_iomad_progress',
      'area' => 'cachedlogs',
      'sharingoptions' => 15,
      'selectedsharingoption' => 2,
      'userinputsharingkey' => '',
    ),
    'repository_googledocs/folder' => 
    array (
      'mode' => 1,
      'simplekeys' => false,
      'simpledata' => true,
      'staticacceleration' => true,
      'staticaccelerationsize' => 10,
      'canuselocalstore' => true,
      'component' => 'repository_googledocs',
      'area' => 'folder',
      'sharingoptions' => 15,
      'selectedsharingoption' => 2,
      'userinputsharingkey' => '',
    ),
    'repository_onedrive/folder' => 
    array (
      'mode' => 1,
      'simplekeys' => false,
      'simpledata' => true,
      'staticacceleration' => true,
      'staticaccelerationsize' => 10,
      'canuselocalstore' => true,
      'component' => 'repository_onedrive',
      'area' => 'folder',
      'sharingoptions' => 15,
      'selectedsharingoption' => 2,
      'userinputsharingkey' => '',
    ),
    'repository_skydrive/foldername' => 
    array (
      'mode' => 2,
      'component' => 'repository_skydrive',
      'area' => 'foldername',
      'sharingoptions' => 2,
      'selectedsharingoption' => 2,
      'userinputsharingkey' => '',
    ),
    'tool_dataprivacy/purpose' => 
    array (
      'mode' => 1,
      'simplekeys' => true,
      'simpledata' => true,
      'staticacceleration' => true,
      'staticaccelerationsize' => 30,
      'component' => 'tool_dataprivacy',
      'area' => 'purpose',
      'sharingoptions' => 15,
      'selectedsharingoption' => 2,
      'userinputsharingkey' => '',
    ),
    'tool_dataprivacy/purpose_overrides' => 
    array (
      'mode' => 1,
      'simplekeys' => true,
      'simpledata' => false,
      'staticacceleration' => true,
      'staticaccelerationsize' => 50,
      'component' => 'tool_dataprivacy',
      'area' => 'purpose_overrides',
      'sharingoptions' => 15,
      'selectedsharingoption' => 2,
      'userinputsharingkey' => '',
    ),
    'tool_dataprivacy/contextlevel' => 
    array (
      'mode' => 1,
      'simplekeys' => true,
      'simpledata' => true,
      'staticacceleration' => true,
      'staticaccelerationsize' => 10,
      'component' => 'tool_dataprivacy',
      'area' => 'contextlevel',
      'sharingoptions' => 15,
      'selectedsharingoption' => 2,
      'userinputsharingkey' => '',
    ),
    'tool_mobile/plugininfo' => 
    array (
      'mode' => 1,
      'simplekeys' => true,
      'staticacceleration' => true,
      'staticaccelerationsize' => 1,
      'component' => 'tool_mobile',
      'area' => 'plugininfo',
      'sharingoptions' => 15,
      'selectedsharingoption' => 2,
      'userinputsharingkey' => '',
    ),
    'tool_monitor/eventsubscriptions' => 
    array (
      'mode' => 1,
      'simplekeys' => true,
      'simpledata' => true,
      'staticacceleration' => true,
      'staticaccelerationsize' => 10,
      'component' => 'tool_monitor',
      'area' => 'eventsubscriptions',
      'sharingoptions' => 15,
      'selectedsharingoption' => 2,
      'userinputsharingkey' => '',
    ),
    'tool_policy/policy_optional' => 
    array (
      'mode' => 4,
      'component' => 'tool_policy',
      'area' => 'policy_optional',
      'sharingoptions' => 2,
      'selectedsharingoption' => 2,
      'userinputsharingkey' => '',
    ),
    'tool_uploadcourse/helper' => 
    array (
      'mode' => 4,
      'component' => 'tool_uploadcourse',
      'area' => 'helper',
      'sharingoptions' => 2,
      'selectedsharingoption' => 2,
      'userinputsharingkey' => '',
    ),
    'tool_usertours/tourdata' => 
    array (
      'mode' => 1,
      'simplekeys' => true,
      'simpledata' => true,
      'staticacceleration' => true,
      'staticaccelerationsize' => 1,
      'component' => 'tool_usertours',
      'area' => 'tourdata',
      'sharingoptions' => 15,
      'selectedsharingoption' => 2,
      'userinputsharingkey' => '',
    ),
    'tool_usertours/stepdata' => 
    array (
      'mode' => 1,
      'simplekeys' => true,
      'simpledata' => true,
      'staticacceleration' => true,
      'staticaccelerationsize' => 1,
      'component' => 'tool_usertours',
      'area' => 'stepdata',
      'sharingoptions' => 15,
      'selectedsharingoption' => 2,
      'userinputsharingkey' => '',
    ),
    'tool_webanalytics/records' => 
    array (
      'mode' => 1,
      'simplekeys' => true,
      'simpledata' => false,
      'component' => 'tool_webanalytics',
      'area' => 'records',
      'sharingoptions' => 15,
      'selectedsharingoption' => 2,
      'userinputsharingkey' => '',
    ),
  ),
  'definitionmappings' => 
  array (
    0 => 
    array (
      'store' => 'default_application',
      'definition' => 'core/coursecat',
      'sort' => 3,
    ),
    1 => 
    array (
      'store' => 'default_application',
      'definition' => 'core/userselections',
      'sort' => 3,
    ),
    2 => 
    array (
      'store' => 'default_application',
      'definition' => 'core/navigation_expandcourse',
      'sort' => 3,
    ),
    3 => 
    array (
      'store' => 'default_application',
      'definition' => 'core/grade_categories',
      'sort' => 3,
    ),
    4 => 
    array (
      'store' => 'default_application',
      'definition' => 'repository_skydrive/foldername',
      'sort' => 3,
    ),
    5 => 
    array (
      'store' => 'default_session',
      'definition' => 'core/calendar_categories',
      'sort' => 3,
    ),
    6 => 
    array (
      'store' => 'default_application',
      'definition' => 'core/tagindexbuilder',
      'sort' => 3,
    ),
    7 => 
    array (
      'store' => 'default_application',
      'definition' => 'core/presignup',
      'sort' => 3,
    ),
    8 => 
    array (
      'store' => 'default_application',
      'definition' => 'core/calendar_subscriptions',
      'sort' => 2,
    ),
    9 => 
    array (
      'store' => 'default_application',
      'definition' => 'core/databasemeta',
      'sort' => 2,
    ),
    10 => 
    array (
      'store' => 'default_application',
      'definition' => 'core/string',
      'sort' => 2,
    ),
    11 => 
    array (
      'store' => 'default_application',
      'definition' => 'core/observers',
      'sort' => 2,
    ),
    12 => 
    array (
      'store' => 'default_application',
      'definition' => 'core/coursemodinfo',
      'sort' => 2,
    ),
    13 => 
    array (
      'store' => 'default_application',
      'definition' => 'core/coursecontacts',
      'sort' => 2,
    ),
    14 => 
    array (
      'store' => 'default_application',
      'definition' => 'core/calendar_categories',
      'sort' => 2,
    ),
    15 => 
    array (
      'store' => 'default_application',
      'definition' => 'core/config',
      'sort' => 2,
    ),
    16 => 
    array (
      'store' => 'default_session',
      'definition' => 'core/grade_categories',
      'sort' => 2,
    ),
    17 => 
    array (
      'store' => 'default_application',
      'definition' => 'mod_glossary/concepts',
      'sort' => 2,
    ),
    18 => 
    array (
      'store' => 'default_application',
      'definition' => 'tool_mobile/plugininfo',
      'sort' => 2,
    ),
    19 => 
    array (
      'store' => 'default_application',
      'definition' => 'core/groupdata',
      'sort' => 2,
    ),
    20 => 
    array (
      'store' => 'default_application',
      'definition' => 'tool_dataprivacy/contextlevel',
      'sort' => 2,
    ),
    21 => 
    array (
      'store' => 'default_application',
      'definition' => 'tool_dataprivacy/purpose',
      'sort' => 2,
    ),
    22 => 
    array (
      'store' => 'default_session',
      'definition' => 'core/tagindexbuilder',
      'sort' => 2,
    ),
    23 => 
    array (
      'store' => 'default_application',
      'definition' => 'tool_dataprivacy/purpose_overrides',
      'sort' => 2,
    ),
    24 => 
    array (
      'store' => 'default_application',
      'definition' => 'core/plugin_manager',
      'sort' => 2,
    ),
    25 => 
    array (
      'store' => 'default_session',
      'definition' => 'core/coursecat',
      'sort' => 2,
    ),
    26 => 
    array (
      'store' => 'default_application',
      'definition' => 'availability_grade/scores',
      'sort' => 2,
    ),
    27 => 
    array (
      'store' => 'default_session',
      'definition' => 'core/navigation_expandcourse',
      'sort' => 2,
    ),
    28 => 
    array (
      'store' => 'default_application',
      'definition' => 'core/fontawesomeiconmapping',
      'sort' => 2,
    ),
    29 => 
    array (
      'store' => 'default_application',
      'definition' => 'tool_webanalytics/records',
      'sort' => 2,
    ),
    30 => 
    array (
      'store' => 'default_application',
      'definition' => 'core/coursecompletion',
      'sort' => 2,
    ),
    31 => 
    array (
      'store' => 'default_session',
      'definition' => 'core/presignup',
      'sort' => 2,
    ),
    32 => 
    array (
      'store' => 'default_application',
      'definition' => 'core/completion',
      'sort' => 2,
    ),
    33 => 
    array (
      'store' => 'default_application',
      'definition' => 'tool_monitor/eventsubscriptions',
      'sort' => 2,
    ),
    34 => 
    array (
      'store' => 'default_application',
      'definition' => 'availability_grade/items',
      'sort' => 2,
    ),
    35 => 
    array (
      'store' => 'default_application',
      'definition' => 'core/questiondata',
      'sort' => 2,
    ),
    36 => 
    array (
      'store' => 'default_application',
      'definition' => 'core/message_processors_enabled',
      'sort' => 2,
    ),
    37 => 
    array (
      'store' => 'default_session',
      'definition' => 'repository_skydrive/foldername',
      'sort' => 2,
    ),
    38 => 
    array (
      'store' => 'default_application',
      'definition' => 'tool_usertours/tourdata',
      'sort' => 2,
    ),
    39 => 
    array (
      'store' => 'default_application',
      'definition' => 'repository_onedrive/folder',
      'sort' => 2,
    ),
    40 => 
    array (
      'store' => 'default_application',
      'definition' => 'core/plugin_functions',
      'sort' => 2,
    ),
    41 => 
    array (
      'store' => 'default_application',
      'definition' => 'core/postprocessedcss',
      'sort' => 2,
    ),
    42 => 
    array (
      'store' => 'default_application',
      'definition' => 'core/htmlpurifier',
      'sort' => 2,
    ),
    43 => 
    array (
      'store' => 'default_application',
      'definition' => 'core/capabilities',
      'sort' => 2,
    ),
    44 => 
    array (
      'store' => 'default_application',
      'definition' => 'core/langmenu',
      'sort' => 2,
    ),
    45 => 
    array (
      'store' => 'default_application',
      'definition' => 'core/coursecattree',
      'sort' => 2,
    ),
    46 => 
    array (
      'store' => 'default_application',
      'definition' => 'block_iomad_progress/cachedlogs',
      'sort' => 2,
    ),
    47 => 
    array (
      'store' => 'default_application',
      'definition' => 'repository_googledocs/folder',
      'sort' => 2,
    ),
    48 => 
    array (
      'store' => 'default_session',
      'definition' => 'core/userselections',
      'sort' => 2,
    ),
    49 => 
    array (
      'store' => 'default_application',
      'definition' => 'tool_usertours/stepdata',
      'sort' => 2,
    ),
    50 => 
    array (
      'store' => 'default_application',
      'definition' => 'core/message_time_last_message_between_users',
      'sort' => 2,
    ),
    51 => 
    array (
      'store' => 'default_application',
      'definition' => 'core/roledefs',
      'sort' => 2,
    ),
    52 => 
    array (
      'store' => 'default_application',
      'definition' => 'core/contextwithinsights',
      'sort' => 2,
    ),
    53 => 
    array (
      'store' => 'default_application',
      'definition' => 'core/user_group_groupings',
      'sort' => 2,
    ),
    54 => 
    array (
      'store' => 'default_application',
      'definition' => 'core/eventinvalidation',
      'sort' => 2,
    ),
    55 => 
    array (
      'store' => 'default_application',
      'definition' => 'core/externalbadges',
      'sort' => 2,
    ),
    56 => 
    array (
      'store' => 'titan',
      'definition' => 'repository_googledocs/folder',
      'sort' => 1,
    ),
    57 => 
    array (
      'store' => 'titan',
      'definition' => 'core/externalbadges',
      'sort' => 1,
    ),
    58 => 
    array (
      'store' => 'default_request',
      'definition' => 'core/temp_tables',
      'sort' => 1,
    ),
    59 => 
    array (
      'store' => 'titan',
      'definition' => 'core/questiondata',
      'sort' => 1,
    ),
    60 => 
    array (
      'store' => 'titan',
      'definition' => 'core/calendar_categories',
      'sort' => 1,
    ),
    61 => 
    array (
      'store' => 'titan',
      'definition' => 'availability_grade/items',
      'sort' => 1,
    ),
    62 => 
    array (
      'store' => 'titan',
      'definition' => 'core/langmenu',
      'sort' => 1,
    ),
    63 => 
    array (
      'store' => 'titan',
      'definition' => 'core/calendar_subscriptions',
      'sort' => 1,
    ),
    64 => 
    array (
      'store' => 'titan',
      'definition' => 'tool_dataprivacy/contextlevel',
      'sort' => 1,
    ),
    65 => 
    array (
      'store' => 'titan',
      'definition' => 'core/capabilities',
      'sort' => 1,
    ),
    66 => 
    array (
      'store' => 'titan',
      'definition' => 'tool_dataprivacy/purpose',
      'sort' => 1,
    ),
    67 => 
    array (
      'store' => 'titan',
      'definition' => 'core/eventinvalidation',
      'sort' => 1,
    ),
    68 => 
    array (
      'store' => 'titan',
      'definition' => 'core/contextwithinsights',
      'sort' => 1,
    ),
    69 => 
    array (
      'store' => 'titan',
      'definition' => 'repository_skydrive/foldername',
      'sort' => 1,
    ),
    70 => 
    array (
      'store' => 'default_request',
      'definition' => 'tool_policy/policy_optional',
      'sort' => 1,
    ),
    71 => 
    array (
      'store' => 'titan',
      'definition' => 'core/message_processors_enabled',
      'sort' => 1,
    ),
    72 => 
    array (
      'store' => 'titan',
      'definition' => 'core/grade_categories',
      'sort' => 1,
    ),
    73 => 
    array (
      'store' => 'titan',
      'definition' => 'core/plugin_functions',
      'sort' => 1,
    ),
    74 => 
    array (
      'store' => 'titan',
      'definition' => 'tool_monitor/eventsubscriptions',
      'sort' => 1,
    ),
    75 => 
    array (
      'store' => 'titan',
      'definition' => 'core/completion',
      'sort' => 1,
    ),
    76 => 
    array (
      'store' => 'titan',
      'definition' => 'core/groupdata',
      'sort' => 1,
    ),
    77 => 
    array (
      'store' => 'titan',
      'definition' => 'core/message_time_last_message_between_users',
      'sort' => 1,
    ),
    78 => 
    array (
      'store' => 'titan',
      'definition' => 'core/htmlpurifier',
      'sort' => 1,
    ),
    79 => 
    array (
      'store' => 'titan',
      'definition' => 'core/config',
      'sort' => 1,
    ),
    80 => 
    array (
      'store' => 'default_request',
      'definition' => 'mod_forum/forum_is_tracked',
      'sort' => 1,
    ),
    81 => 
    array (
      'store' => 'titan',
      'definition' => 'core/user_group_groupings',
      'sort' => 1,
    ),
    82 => 
    array (
      'store' => 'default_request',
      'definition' => 'core/calculablesinfo',
      'sort' => 1,
    ),
    83 => 
    array (
      'store' => 'titan',
      'definition' => 'block_iomad_progress/cachedlogs',
      'sort' => 1,
    ),
    84 => 
    array (
      'store' => 'default_request',
      'definition' => 'core/suspended_userids',
      'sort' => 1,
    ),
    85 => 
    array (
      'store' => 'titan',
      'definition' => 'tool_usertours/tourdata',
      'sort' => 1,
    ),
    86 => 
    array (
      'store' => 'titan',
      'definition' => 'repository_onedrive/folder',
      'sort' => 1,
    ),
    87 => 
    array (
      'store' => 'titan',
      'definition' => 'core/coursecat',
      'sort' => 1,
    ),
    88 => 
    array (
      'store' => 'default_request',
      'definition' => 'core/repositories',
      'sort' => 1,
    ),
    89 => 
    array (
      'store' => 'default_request',
      'definition' => 'core/tags',
      'sort' => 1,
    ),
    90 => 
    array (
      'store' => 'titan',
      'definition' => 'core/coursecontacts',
      'sort' => 1,
    ),
    91 => 
    array (
      'store' => 'titan',
      'definition' => 'core/observers',
      'sort' => 1,
    ),
    92 => 
    array (
      'store' => 'titan',
      'definition' => 'core/coursemodinfo',
      'sort' => 1,
    ),
    93 => 
    array (
      'store' => 'default_request',
      'definition' => 'tool_uploadcourse/helper',
      'sort' => 1,
    ),
    94 => 
    array (
      'store' => 'titan',
      'definition' => 'core/userselections',
      'sort' => 1,
    ),
    95 => 
    array (
      'store' => 'titan',
      'definition' => 'mod_glossary/concepts',
      'sort' => 1,
    ),
    96 => 
    array (
      'store' => 'titan',
      'definition' => 'tool_usertours/stepdata',
      'sort' => 1,
    ),
    97 => 
    array (
      'store' => 'titan',
      'definition' => 'core/plugin_manager',
      'sort' => 1,
    ),
    98 => 
    array (
      'store' => 'titan',
      'definition' => 'core/coursecompletion',
      'sort' => 1,
    ),
    99 => 
    array (
      'store' => 'titan',
      'definition' => 'core/navigation_expandcourse',
      'sort' => 1,
    ),
    100 => 
    array (
      'store' => 'titan',
      'definition' => 'core/presignup',
      'sort' => 1,
    ),
    101 => 
    array (
      'store' => 'titan',
      'definition' => 'core/string',
      'sort' => 1,
    ),
    102 => 
    array (
      'store' => 'titan',
      'definition' => 'core/tagindexbuilder',
      'sort' => 1,
    ),
    103 => 
    array (
      'store' => 'default_request',
      'definition' => 'core/coursecatrecords',
      'sort' => 1,
    ),
    104 => 
    array (
      'store' => 'default_request',
      'definition' => 'core/course_user_dates',
      'sort' => 1,
    ),
    105 => 
    array (
      'store' => 'titan',
      'definition' => 'core/coursecattree',
      'sort' => 1,
    ),
    106 => 
    array (
      'store' => 'titan',
      'definition' => 'core/roledefs',
      'sort' => 1,
    ),
    107 => 
    array (
      'store' => 'titan',
      'definition' => 'tool_mobile/plugininfo',
      'sort' => 1,
    ),
    108 => 
    array (
      'store' => 'default_request',
      'definition' => 'core/portfolio_add_button_portfolio_instances',
      'sort' => 1,
    ),
    109 => 
    array (
      'store' => 'default_request',
      'definition' => 'core/modelfirstanalyses',
      'sort' => 1,
    ),
    110 => 
    array (
      'store' => 'titan',
      'definition' => 'core/databasemeta',
      'sort' => 1,
    ),
    111 => 
    array (
      'store' => 'titan',
      'definition' => 'availability_grade/scores',
      'sort' => 1,
    ),
    112 => 
    array (
      'store' => 'titan',
      'definition' => 'core/fontawesomeiconmapping',
      'sort' => 1,
    ),
    113 => 
    array (
      'store' => 'titan',
      'definition' => 'tool_dataprivacy/purpose_overrides',
      'sort' => 1,
    ),
    114 => 
    array (
      'store' => 'titan',
      'definition' => 'core/postprocessedcss',
      'sort' => 1,
    ),
    115 => 
    array (
      'store' => 'titan',
      'definition' => 'tool_webanalytics/records',
      'sort' => 1,
    ),
    116 => 
    array (
      'store' => 'default_application',
      'definition' => 'core/yuimodules',
      'sort' => 2,
    ),
    117 => 
    array (
      'store' => 'titan',
      'definition' => 'core/yuimodules',
      'sort' => 1,
    ),
  ),
  'locks' => 
  array (
    'cachelock_file_default' => 
    array (
      'name' => 'cachelock_file_default',
      'type' => 'cachelock_file',
      'dir' => 'filelocks',
      'default' => true,
    ),
  ),
);