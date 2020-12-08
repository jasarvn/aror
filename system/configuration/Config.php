<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/*
* default application folder
*/

$application_path = 'application' ;

/*
* default controller folder
*/

$controller_path = 'application/controller';

/*
* default model folder
*/

$model_path = 'application/Model';

/*
* default view folder
*/

$view_path = realpath('application/View');

/*
* load customize developer settings
*/

require_once($application_path."/Settings/Config.php");

/*
* check if controller path was customize by the developer
*/

$controller_path = ($controller == '')  ? realpath($controller_path) : $controller;

/*
* check if model path was customize by the developer
*/

$model_path = ($model == '')  ? realpath($model_path) : $model;

/*
* check if view path was customize by the developer
*/

$view_path = ($view == '')  ? realpath($view_path) : $view;
