<?php
namespace PhalconRest\Controllers;

use \Phalcon\DI\Injectable,
    \Phalcon\DI;
/**
 *  \Phalcon\Mvc\Controller has a final __construct() method, so we can't
 *  extend the constructor (which we will need for our RESTController).
 *  Thus we extend DI\Injectable instead.
 */
class BaseController extends Injectable{

	public function __construct(){
		//parent::__construct();
		$di = DI::getDefault();
		$this->setDI($di);
	}

}