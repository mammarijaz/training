<?php

class Request
{
    
    public $controller    = "Index";
    public $action        = "Index";
    public $params        = array();
    public $basePath      = BASEPATH;
    
    public function __construct() {
    	if( ltrim($_SERVER["REQUEST_URI"],'/') != $this->basePath )
    	{
	        $path = trim(parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH), "/");
	        $path = preg_replace('#[^a-zA-Z0-9]/#', "", $path);
	        if (strpos($path, $this->basePath) === 0) {
	            $path = substr($path, strlen($this->basePath));
	        }
	        @list($controller, $action, $params) = explode("/", $path, 3);
	        if (isset($controller)) {
	            $this->setController($controller);
	        }
	        if (isset($action)) {
	            $this->setAction($action);
	        }
	        if (isset($params)) {
	            $this->setParams(explode("/", $params));
	        }
	     }
	     return $this;   
    }

    private function setController($controller) {
        $controller = ucfirst(strtolower($controller));
        $this->controller = $controller;
        return $this;
    }
    
    private function setAction($action) {
        $this->action = $action;
        return $this;
    }
    
    private function setParams(array $params) {
        $this->params = $params;
        return $this;
    }


}