<?php

namespace Init;

abstract class Request
{
	function __construct(){
	}

	function returnRequest(){
		return $_SERVER['REQUEST_URI'];
	}
}
