<?php
namespace system\route;

defined('BASEPATH') OR exit('No direct script access allowed');

require_once(BASEPATH."route/Routing.php");

class Web implements Routes{

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
    $split_method = explode('@',$method);

    $controller = $split_method[0].".php";
    $method = (count($split_method) > 1) ? $split_method[1] : "index";

    self::$data[$url]['controller'] = $controller;
    self::$data[$url]['method'] = $method;


  }

  public function get_route(){

  }

}
