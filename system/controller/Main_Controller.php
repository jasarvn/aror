<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once(BASEPATH."core/Aror.php");
require_once(BASEPATH."libraries/box/core/view_box.php");


class Main_Controller{

  protected $box;


  function __construct(){
    $this->box = new view_box();
  }

}
