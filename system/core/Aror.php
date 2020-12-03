<?php

defined('BASEPATH') OR exit('No direct script access allowed');
/*
* Initialize constants
*/

require_once(BASEPATH."constant\cons.php");

/*
* initiate routes
*/

require_once(BASEPATH."route\Web.php");

require_once("application\\route\web.php");

use system\route\web as web;

$route = new web();

/*
* capture requested route
*/

$web = $route->get_web_route();

$url_request = $_SERVER['REQUEST_URI'];
/*
* determine where the index file resides.
*/

/*
* get the url_route
* the url_route is the part that is after index.php
* and because of .htaccess where the index.php is not necessary in the url
* the directory of the index.php should be determined.
*/

$request = str_replace(_APP_PATH,'',$url_request);

/*
* check requested route exist
*/
if(array_key_exists ( $request , $web )){
  /*
  * check controller if exist
  */
  var_dump($web[$request]);
}
else{
  echo "URL does not exist";
}
