<?php
require('baseController.php');

class ControllerFactory
{
    public static function create($name,$params)
    {
        return new BaseController($name,$params);
    }
}