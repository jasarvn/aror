<?php

/*
* get root directory
*/

$app_path = __DIR__;

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
