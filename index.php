<?php

/*
* get root directory
*/

$actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

$app_path = basename(__DIR__);

/*
* Define BASEPATH
*/
$system_path = 'system';

$_temp = realpath($system_path);

$system_path = $_temp.DIRECTORY_SEPARATOR;

define('BASEPATH', $system_path);

/*
* initialize AROR framework
*/

require_once(BASEPATH."core\Aror.php");
