<?php

// call class

require_once("OO/Car.php");
require_once("OO/Motorcycle.php");

$data = date('d/m/Y');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Atributos Class OO ::</title>

<!-- css -->
<link rel="stylesheet" href="css/bootstrap.min.css" >

<style>
    body {
        margin-top:20px;
    }

    .shadow {
        -webkit-box-shadow: 1px 11px 44px 10px rgba(0,0,0,0.38);
        -moz-box-shadow: 1px 11px 44px 10px rgba(0,0,0,0.38);
        box-shadow: 1px 11px 44px 10px rgba(0,0,0,0.38);
    }
     * code {
         color :#cacaca;
     }
</style>

</head>
<body class="bg-primary">


<div class="container">

    <div class="jumbotron shadow">
        <h1 class="display-3">Learning PHP OO</h1>
        <hr class="my-2">
        <p class="lead"> <?=$data?></p>
    </div>


    <div class="card bg-secondary text-white">
    <div class="card-header">  Class </div>
    <div class="card-body">

    <p class="card-text">

    <?php
    
    // instanciang object 

    $ferrari = new Car ;
    $ferrari->brand= "Ferrari";
    $ferrari->color="Vermelho";
    $ferrari->engine="300";
    $ferrari->factured="1980";
    $ferrari->doors="2";

    $mustang = new Car ;
    $mustang->brand= "Mustang";
    $mustang->color=" Prata";
    $mustang->engine="450";
    $mustang->factured="1975";
    
    // motorcycle

    $m = new Motorcycle;
    $m->getFactured="2015";
    
    // show 

    echo "<p> Primeiro Carro : ".$ferrari->brand.", portas ". 
    $ferrari->doors.", ". 
    $ferrari->color.", ". 
    $ferrari->engine." </p> ";

    echo "<strong>A potência é : ".$ferrari->getEngine()."</strong>";
    echo "<p><strong>Fablicado em : ".$ferrari->getFactured()."</strong>";

    // var_dump 
    echo '<div class="alert bg-primary">';
    var_dump($ferrari);
    echo '</div>';
    
    echo "<hr>";

    echo "<p> Segundo Carro : ".$mustang->brand.", ". 
    $mustang->color.", ". 
    $mustang->engine." </p> ";
    echo "<strong>A potência é : ".$mustang->getEngine()."</strong>";
    echo "<p><strong>Fabricado em : ".$mustang->getFactured()."</strong>";

    // var_dump 
    echo '<div class="alert bg-primary">';
    var_dump($mustang);
    echo '</div>';

    // var_dump object m 
    echo "<p> Ano de fablicação da Moto : ".$m->getFactured;

    echo '<div class="alert bg-warning">';
    var_dump($m);
    echo '</div>';

    ?>

    
    </p>

  </div>
</div>



</div><!-- container -->



<!-- js -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</body>
</html>