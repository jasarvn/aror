<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require_once(BASEPATH."core/Def.php");
require_once(BASEPATH."core/Route.php");

$routes = new Route();
$data = array('jasper/arvin'=>'arvin/jasper');
$routes->set_routes($data);
$routes->set_routes($data);
