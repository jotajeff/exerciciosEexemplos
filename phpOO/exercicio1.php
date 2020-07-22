<?php

$data = date('d/m/Y');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functional ::</title>

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
</style>

</head>
<body class="bg-primary">


<div class="container">

    <div class="jumbotron shadow">
        <h1 class="display-3">Learning PHP OO</h1>
        <hr class="my-2">
        <p class="lead"> <?=$data?></p>
    </div>


    <div class="card bg-info">
    <div class="card-header"> Funcional</div>
    <div class="card-body">

    <p class="card-text">

    <?php

            function impar($var)
            {
                // retorna se o inteiro informado é impar
                return ($var & 1);
            }
            
            function par($var)
            {
                // retorna se o inteiro informado é impar
                return (!($var & 1));
            }

            $numeros = array(6, 7, 8, 9, 10, 11, 12, 17, 22, 60, 79);

            echo "<p> Lista de Números : ".print_r($numeros)."</p>";

            echo "<p>Impares: \n </p>";
            print_r(array_filter($numeros, "impar"));
            
            echo '"<br style ="clear:both";>';

            echo "<p>Pares: \n </p>";
            print_r(array_filter($numeros, "par"));

            echo "<hr>";

            $idades = array(11,18,19,22,17,15,26,23);

            /*
            function filtro (int $age){
                return ($age >= 18);
            }
            */

            
            $result = array_filter($idades , function($idade) {
                return $idade  >= 18;
            });

            print_r($result);

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