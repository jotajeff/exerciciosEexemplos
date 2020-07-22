<?php

//name of file 

require_once("myFunctions.php");

$name = nameFileCSV();

$file = fopen(__DIR__.'/'.$name, 'w');

$data = [

        ['1','2','3', "Macherri", "Donatello" ],
        ['a','b','c', "Cecilie"],
        ['x', 'y', "Marriet", "Marrion"],
        ['x', 'y', "Marriet", "Marrion"],
        ["Gatatita" , "Kristal"]

];

foreach ($data as $row ){

    fputcsv($file,$row, ";");

}

fclose($file);