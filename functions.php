<?php

require_once(dirname(__FILE__).'/vendor/autoload.php');

// Mustache
$ms_t = new Mustache_Engine(array(
    'loader' => new Mustache_Loader_FilesystemLoader(dirname(__FILE__) . '/_includes'),
)); // '_includes/' engine

$ms = new Mustache_Engine;

// // Config
// $config = json_decode(file_get_contents(dirname(__FILE__).'/_config.json'));

// // Database
// use Medoo\Medoo;
// $db_config = json_decode(file_get_contents(dirname(__FILE__).'/_db-config.json'));
//
// $db = new Medoo([
//     'database_type' => $db_config->{'database_type'},
//     'database_name' => $db_config->{'database_name'},
//     'server' => $db_config->{'server'},
//     'username' => $db_config->{'username'},
//     'password' => $db_config->{'password'}
// ]);

// Parsedown
$Parsedown = new Parsedown();

?>
