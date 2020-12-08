<?php

/**
 *
 */
namespace system\route;

defined('BASEPATH') OR exit('No direct script access allowed');

require_once("application\\route\web.php");
require_once(BASEPATH."route\Routing.php");


interface Routes
{

  function get_route();

}



class Routing {

  private $uri_request;

  private $web;

  public $controller_path;

  public $controller;

  public $method;

  function __construct(){



    $this->uri_request = $this->get_uri_request();

    $web = new web;
    $this->web = $web->get_web_route();
    $this->init_route();


  }

  private function init_route(){

      /*
      * check requested route exist
      */
      if(array_key_exists ( $this->uri_request , $this->web )){
        /*
        * check controller folder exist
        */
            if(is_dir(_CONTROLLER)){

              if(is_file(_CONTROLLER."/".$this->web[$this->uri_request]['controller'])){
                $this->controller_path = _CONTROLLER."/".$this->web[$this->uri_request]['controller'];
                $this->controller = basename(explode(".",$this->controller_path)[0]);
                $this->method = $this->web[$this->uri_request]['method'];
              }
              else{
                  $ERROR = "Controller not found!";
              }

            }
            else{
              $ERROR = "Controller path not set properly!";
            }


      }
      else{
        $ERROR = "route not found!";
      }

    //  echo $controller;

  }

  private function get_uri_request(){

    /*
    * determine where the index file resides.
    */

    /*
    * get the url_route
    * the url_route is the part that is after index.php
    * and because of .htaccess where the index.php is not necessary in the url
    * the directory of the index.php should be determined.
    */


    if(_ROOT_DIRECTORY === str_replace('/','',_APP_PATH)){
      $request =  ltrim($_SERVER['REQUEST_URI'], '/');

    }
    else{

      $request = str_replace(_APP_PATH,'',$_SERVER['REQUEST_URI']);
    }

    return $request;
  }




}
