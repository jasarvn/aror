<?php
require_once(BASEPATH."route\Web.php");
use system\route\web as web;

web::set_webURL("","welcome.php");
web::set_webURL("welcome/test","test2/test.php");
web::set_webURL("test3","test4");
web::set_webURL("test5","test6");
web::set_webURL("test7","test8");
