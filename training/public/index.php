<?php
require_once('../core/controllers/controllerFactory.php');
require_once('../app/config.php');
/*define('BASEPATH', __DIR__);

$viewPath = __DIR__.'/../views/';  //should be a $Global variable

function __autoload($controller) {
  require_once BASEPATH.'/app/'.$controllers.'/'.$name.'.php';
} */

$view="welcome";
$name="layouts";
$param=array("country"=>"Canada");
$front=ControllerFactory::create($name,$param);
$front->actionView($view);
//var_dump(file_exists('../core/controllers/baseController.php') && is_readable('../core/controllers/baseController.php'));
/*$view="home";

$front->actionView($view);*/ 

//$viewLoader = new ViewManager($viewPath);