<?php

namespace system\route;

class Web{

  private $web_route = array();
  public static $data = array();

  function __construct(){
      $this->web_route =& self::$data;
  }

  public function set_web_route($data){
      array_push($this->web_route,$data);
  }

  public function get_web_route(){
        return $this->web_route;
  }

  public static function set_webURL($url, $method){
    array_push(self::$data,array($url => $method));
  }

}
