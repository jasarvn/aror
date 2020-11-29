<?php

$system_path = 'system';

$_temp = realpath($system_path);

$system_path = $_temp.DIRECTORY_SEPARATOR;


define('BASEPATH', $system_path);

require_once(BASEPATH."route\Web.php");
//require_once(BASEPATH."core/Aror.php");

//echo $_SERVER['REQUEST_URI'];
//echo $system_path;

use system\route\web as web;

require_once("application\\route\web.php");

$route = new web();

//$route->set_web_route($data);
var_dump($route->get_web_route());


$url_request = $_SERVER['REQUEST_URI'];

$request = explode("/",$url_request);
