<?php


class ViewManager{
    public static function load($controller,$viewName,$data){
        $viewPath="../app/views/".$controller."/".$viewName.".php";
        $layoutPath="../app/views/layouts/default.php";        
        if( file_exists($layoutPath) ){  
            ob_start();
                include($viewPath);
                $content=ob_get_contents();
                ob_end_clean();
            include($layoutPath);
            $var=ob_get_contents();
            ob_end_clean();
            echo $var;
        }
        else
        {    
          throw new Exception("View does not exist: ".$path);
        }
    }
    
}