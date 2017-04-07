<?php

require('controllerInterface.php');
require('../core/views/viewManager.php');

class BaseController implements ControllerInterface
{
  
    protected $params;
    protected $name;

    
    public function __construct($name,$params){
            $this->name=$name;
            $this->params=$params;
    }

    public function actionView($view)
    {
        
        ViewManager::load($this->name,$view,$this->params); 
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