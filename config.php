<?php

require 'environment.php';
define("BASE_URL", "http://localhost/PhpProject1");
global $config;
$config = array();

if (ENVIRONMENT == "development") {
    $config['dbname'] = 'joao';
    $config['host'] = 'localhost';
    $config['dbuser'] = 'root';
    $config['dbpass'] = '475236';
} else {
    $config['dbname'] = 'galeria';
    $config['host'] = 'localhost';
    $config['dbuser'] = 'root';
    $config['dbpass'] = '475236';
}


