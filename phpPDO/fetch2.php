<?php 

try {
    $conn  = new \PDO ("mysql:host=localhost;dbname=avenida_db","root","mysql");

    // using FETCHALL   stmt statement
    $query = "Select * from Students Where id=1";
    $stmt  = $conn->query($query);
    $list = $stmt->fetch(PDO::FETCH_ASSOC);
    echo "<p>".$list['dsName'];
    echo "<p>".$list['dsEmail'];
    //print_r($list);
    

} catch(\PDOException $e) {

    echo 'Error ! Message : '.$e->getMessage()." Code : ".$e->getCode();


}