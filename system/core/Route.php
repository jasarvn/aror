<?php





class Route {

  use application\route\web;

  private $routes = array();

  function set_routes(array $data){
    array_push($this->routes,$data);
  }

  function get_routes(){
    return $this->routes;
  }

  static function setRoute(array $data){
    self::set_routes($data);
  }

}
