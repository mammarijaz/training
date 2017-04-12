<?php

require('controllerInterface.php');
require('../core/views/viewManager.php');

class BaseController implements ControllerInterface
{
    protected $name;

    
    public function __construct($name){
            $this->name=$name;

    }

    public function actionView($view,$data=NULL)
    {
        
        ViewManager::load($this->name,$view,$data); 
    }

    public function actionAdd()
    {

        
    }

    public function actionDelete()
    {

        
    }

    public function actionUpdate()
    {

        
    }
    

}