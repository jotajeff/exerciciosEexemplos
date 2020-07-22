<?php 

try {
    $conn  = new \PDO ("mysql:host=localhost;dbname=avenida_db","root","mysql");

    // using FETCHALL   stmt statement
    $query = "Select * from Students";
    $stmt  = $conn->query($query);
    $list = $stmt->fetchAll(PDO::FETCH_ASSOC);
    //echo $list[0]['dsName'];
    print_r($list);
    

} catch(\PDOException $e) {

    echo 'Error ! Message : '.$e->getMessage()." Code : ".$e->getCode();


}