<?php 

require_once "IConn.php";
require_once "Conn.php";
require_once "IStudent.php";
require_once "Student.php";
require_once "ServiceStudent.php";

require_once "Config.php";

$student = new Student;
$service = new ServiceStudent($db, $student);

print_r($service->list());