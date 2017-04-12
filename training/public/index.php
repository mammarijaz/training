<?php
require_once('../app/config.php');
require_once('../core/request.php');
require_once('../core/controllers/controllerFactory.php');


function __autoload($controller) {
    require_once('../app/controllers/'.$controller.'.php');
}

$request=new Request();

$action=$request->action;

$controller=ControllerFactory::create($request->controller);
$action=$controller->$action();

/* for testing db connection
$array=array("std_name"=>"Ammar Ijaz","std_dob"=>"10/14/1991","std_address"=>"House No 129 Block G joher town");

$pdo=DBSingleton::getInstance(DBSERVER,DBUSER,DBPSW,DBNAME);

DbAl::insert("student",$array);

*/

/*
$view="welcome";
$name="layouts";
$param=array("country"=>"Canada");
$front=ControllerFactory::create($name,$param);
$front->actionView($view);
*/
