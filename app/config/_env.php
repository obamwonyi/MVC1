<?php 

//require autoload.php 
require_once __DIR__ .'/../../vendor/autoload.php';

//use Dotenv for loading local environment into the $_SERVER super global
use Dotenv\Dotenv;
//creating an Immutalble from the .env file 
$dotEnv = Dotenv::createImmutable(__DIR__."/../../");
//loading the local environment details into global.
$dotEnv->load();






?>