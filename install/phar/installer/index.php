<?php
require_once "functions.php";

$config = array(
    'baseDir' => "/usr/share/phpietadmin",
    'databaseScriptNew' => "install/database.new.sql",
    'databaseScriptUpdate' => "install/database.update.sql",
    'databaseFile' => "app/config.db",
    'authFile' => '/usr/share/phpietadmin/install/auth'
);
checkEnvironment();

if ($config['userInput']['action'] === "update") {
    updateInstallation();
} else if ($config['userInput']['action'] === "install") {

} else if ($config['userInput']['action'] === "reinstall") {

}