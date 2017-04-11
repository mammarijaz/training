<?php
class DBSingleton
{
   private $inst = NULL;
   private $connection = FALSE; //connection to be opened

   //DB connection values
   private $server = NULL; private $usr = NULL; private $psw = NULL; private $name = NULL;

   public static function getInstance($db_server, $db_usr, $db_psw, $db_name)
   {
      $this->server=$db_server;
      $this->usr=$db_usr;
      $this->psw=$db_psw;
      $this->name=$db_name;
      if($inst === NULL)
         $this->inst = new DBSingleton();
      return $this->inst;
   }
   private __construct()
   {
            try
            {
                 $obj=new mysqli($this->server,$this->usr,$this->psw,$this->name);  
                 return $obj;
            }
            catch( Exception $e)
            {
                 echo $e->errorMessage(); 
            }

   }

}