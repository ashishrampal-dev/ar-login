<?php

require_once __DIR__ . '/Arlogin.php';
require_once __DIR__ . '/config.php';


$db = new Arlogin([
	'database_type' => 'mysql',
    'database_name' => $db_config['dbname'],
    'server' => $db_config['host'],
    'username' => $db_config['username'],
    'password' => $db_config['password'],
    'charset' => 'utf8'
]);

