<?php
require('baseController.php');

class ControllerFactory
{
    public static function create($name)
    {
    	$controller=$name."Controller";
        return new $controller($name);
    }
}