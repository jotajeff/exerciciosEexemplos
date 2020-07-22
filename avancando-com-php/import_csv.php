<?php

// import csv

$file = fopen(__DIR__.'/myFile.csv', 'r');

$result = [];

while (($data = fgetcsv($file)) !=+ false) {

    //print_r($data);
    $result[] = $data;

}

var_dump($result);

fclose($file);