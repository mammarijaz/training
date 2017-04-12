<?php
class DBSingleton
{
   private static $inst = NULL;

   //DB connection values
   private $server = NULL; private $usr = NULL; private $psw = NULL; private $name = NULL;

   private function __construct($db_server,$db_usr,$db_psw, $db_name)
   {
            try
            {
                 $obj=new PDO('mysql:host='.$db_server.';dbname='.$db_name, $db_usr, $db_psw);  
                 return $obj;
            }
            catch( Exception $e)
            {
                 echo $e->errorMessage(); 
            }

   }

   public static function getInstance($db_server=NULL, $db_usr=NULL, $db_psw=NULL, $db_name=NULL)
   { 
      
      if(!isset(self::$inst))
      {               
         self::$inst = new DBSingleton($db_server,$db_usr,$db_psw, $db_name);
      }   
      return self::$inst;
   }
   

}