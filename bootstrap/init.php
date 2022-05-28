<?php 

//set session if session is not set 
if(!isset($_SESSION)) session_start();
//requiring the _env.php file from the config .
//to set the local environment for our local app development
require_once __DIR__ . "/../app/config/_env.php";



?>