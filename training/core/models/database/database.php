<?php

require_once(__DIR__.'/drivers/mysqli/mysqli_driver.php');

class DbAl
{

public static function insert ($table, $data)
{ 
    $pdo=DBSingleton::getInstance();
    foreach($data as $column => $value)
    {
        $sql = "INSERT INTO {$table} ({$column}) VALUES (:{$column});";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(array(':'.$column => $value));
    }
}


}