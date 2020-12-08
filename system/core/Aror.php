<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/*
* Initialize Definition
*/

require_once(BASEPATH."configuration/Config.php");

/*
* Initialize constants
*/

require_once(BASEPATH."constant\cons.php");

/*
* initiate routes
*/

require_once(BASEPATH."route\Routing.php");

use system\route\routing as route;

$route = new route;
$controller_path = $route->controller_path;
$controller = $route->controller;
$method = $route->method;

require_once($controller_path);

$aror = new $controller;
$aror->$method();
