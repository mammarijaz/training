<?php
require('../core/controllers/baseController.php');
require('../app/config.php');
define('BASEPATH', __DIR__);
$viewPath = __DIR__.'/../views/';  //should be a $Global variable

function __autoload($controller) {
  require_once BASEPATH.'/app/'.$controllers.'/'.$name.'.php';
}

var_dump(BASEPATH);


$front=new BaseController();
$front->run();

//$viewLoader = new ViewManager($viewPath);