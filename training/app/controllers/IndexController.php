<?php


require('../core/controllers/baseController.php');

class IndexController extends BaseController
{

    
    public function actionIndex()
    {
        $data=array("country"=>"Pakistan");
        $this->actionView("welcome");
    }

    

}