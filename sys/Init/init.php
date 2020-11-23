<?php

include("request.php");

use Init\request as rq;

class Init extends rq{

  public $Global_request;

  function __construct(){
    $this->main_init($this->returnRequest());
  }

  function main_init($request){
      $this->Global_request = $request;
      echo $this->Global_request;
  }

}
