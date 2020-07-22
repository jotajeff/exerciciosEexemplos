<?php

$qChoice = $_GET['qChoice'];
$qOutput = $_GET['qOutput'];


$parts = explode("-","$qChoice");
$mes = $parts[0];
$ano = $parts[1];
$orderBy = $parts[2];

echo "<p>Mes ".$mes;

echo "<p>Ano ".$ano;

echo "<p>Output ".$qOutput;






?>