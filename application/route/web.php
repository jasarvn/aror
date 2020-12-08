<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require_once(BASEPATH."route\Web.php");
use system\route\web as web;

web::set_webURL("","welcome@index");
web::set_webURL("test","welcome@test");
web::set_webURL("test2","test/testclass@index");
