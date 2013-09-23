<?php

define('LOADER', __DIR__ . '/vendor/autoload.php');
define('INSTALL', __DIR__ . '/install.sh');

// Composer autoloading
if (file_exists(LOADER)) {
    require_once LOADER;
} else {
    if (!isset($_GET['install'])) {
        echo 'When starting the project the first time you need to install the plugin composer, file responsible for generating the autoloader and all project dependencies.<br /><br />';
        echo 'To continue the installation, click <strong><a href="?install">INSTALL</a></strong> or run <strong>install.sh</strong> in the command line.';
        exit;
    } else {
        $output = shell_exec(INSTALL);
        exit("<pre>{$output}</pre>");
    }
}