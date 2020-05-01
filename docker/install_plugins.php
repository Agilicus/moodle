<?php

$moodle_dir = ('' != getenv('MOODLE_INSTALL_DIR')) ? getenv('MOODLE_INSTALL_DIR') : "/var/www/moodle";

$plugins=array(
    "moodle-local_aws"=> array("https://github.com/catalyst/moodle-local_aws.git", "9766894f6a03b6c2c6a7194f028abd6fdcc1f8c6", "/local/aws/"),
    "moodle-local_csp"=> array("https://github.com/catalyst/moodle-local_csp.git", "834589c51dbc79ceb7703bfb7a8d773433d69a9b", "/local/csp"),
    "moodle-tool_objectfs"=> array("https://github.com/Agilicus/moodle-tool_objectfs", "51225679dd020208f548af2c6cee8be448954abc", "/admin/tool/objectfs/"),
    "moodle-tool_heartbeat"=> array("https://github.com/catalyst/moodle-tool_heartbeat.git", "f6ee68218e33b2d8cb29574edacb56e603cdd196", "/admin/tool/heartbeat/"),
    "h5p-moodle-plugin"=> array("https://github.com/h5p/h5p-moodle-plugin.git", "6d0a8aa7211842c0d89b1cb18300186b04da04d0", "/mod/hvp/")
);

foreach($plugins as $plugin => $settings) {
    $plugindir = '/tmp/' . $plugin;
    $installdir = $moodle_dir . $settings[2];

    echo 'installing plugin:' . $plugin . "\n";
    $git_clone_cmd = 'git clone ' . $settings[0] . ' ' . $plugindir;

    echo $git_clone_cmd . "\n";
    echo shell_exec($git_clone_cmd);
   
    $mkdir_cmd = 'mkdir -p '. $installdir;
    echo $mkdir_cmd . "\n";
    echo shell_exec($mkdir_cmd);

    $git_chckout_cmd = 'cd '. $plugindir.' && git checkout ' . $settings[1];
    echo $git_chckout_cmd . "\n";
    echo shell_exec($git_chckout_cmd);

    $git_submodule_cmd = 'cd ' . $plugindir . ' && git submodule update --init';
    echo $git_submodule_cmd . "\n";
    echo shell_exec($git_submodule_cmd);

    $cp_command = 'cp -r '. $plugindir . "/* " . $installdir;
    echo $cp_command . "\n";
    echo shell_exec($cp_command);

    $rm_command = 'rm -rf ' . $plugindir;
    echo shell_exec($rm_command);
}

?>