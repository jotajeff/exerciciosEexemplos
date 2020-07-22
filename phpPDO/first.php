<?php 

try {
    $conn  = new \PDO ("mysql:host=localhost;dbname=avenida_db","root","mysql");

    // using EXEC
    //$query = "Select * from tabStudents";
    $query = "insert into   `Students` (`dsName` , `dsEmail`) VALUES ('gudao','gudao@gmail.com')";
    $ret  = $conn->exec($query);
    print_r($ret);

} catch(\PDOException $e) {

    echo 'Error ! Message : '.$e->getMessage()." Code : ".$e->getCode();


}