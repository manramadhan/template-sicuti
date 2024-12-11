<?php 
define('HOSTNAME','localhost');
define('USERNAME','root');
define('PASSWORD','');
define('DATABASE','db_project_si');
define('BASE_URL','http://localhost/template_absen/');

$db = new mysqli(HOSTNAME,USERNAME,PASSWORD,DATABASE);

// include function
include(__DIR__.'/functions/function_login.php');
include(__DIR__.'/functions/function_register.php');
include(__DIR__.'/functions/function_user.php');
include(__DIR__.'/functions/function_devisi.php');