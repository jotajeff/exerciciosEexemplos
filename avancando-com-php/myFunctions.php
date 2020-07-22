<?php

function nameFileCSV(){

    $fuso = new DateTimeZone('America/Sao_Paulo');
    $data = new DateTime();
    $data->setTimezone($fuso);
    $result = $data->format('Y-m-d H:i');
    $result = str_replace("-", "", $result);
    $result = str_replace(":", "", $result);
    $result = str_replace(" ", "_", $result);
    
    return  $result.".csv";

}

?>