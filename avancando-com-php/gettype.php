<?php

$data = array(1, 1., NULL, new stdClass, 'foo',true, 3.5 ,  2020 , "jota");

foreach ($data as $value) {
    echo gettype($value), "<br />";
}


$myVariable = "02";

echo "<p> Agora é ".gettype($myVariable);

$myVariable = (int)"02";

echo "<p> Agora é ".gettype($myVariable);


?>