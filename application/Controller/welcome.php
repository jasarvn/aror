<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require_once(BASEPATH."controller/Main_Controller.php");

class Welcome extends Main_Controller{



  function __construct(){
    Parent::__construct();
  }

  function index(){


    $this->box->view("test.php",array('body'=>'jasper arvin l. abella'));

  }

  function test(){

    echo "this is just a test";
  }

}
