<?php
defined('BASEPATH') OR exit('No direct script access allowed');

const AROR_VERSION = "AROR ver. 1.0.0";

//$app_path = "/".basename($app_path)."/";

//$_path = basename($_SERVER['DOCUMENT_ROOT']);

define('_APP_PATH',"/".basename($app_path)."/");

define('_ROOT_DIRECTORY',basename($_SERVER['DOCUMENT_ROOT']));

/*
* set path as constants
*/


define('_APPLICATION', $application_path) ;
define('_CONTROLLER', $controller_path);
define('_MODEL', $model_path);
define('_VIEW', $view_path);
