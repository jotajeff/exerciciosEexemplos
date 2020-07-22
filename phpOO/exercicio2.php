<?php

$data = date('d/m/Y');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class OO ::</title>

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
    <div class="card-header"> Object and Class </div>
    <div class="card-body">

    <p class="card-text">

    <?php
    
    class People {
        public function getHello($name){
            return "Hello {$name}";
        }
    }
           

    $p = new People ;

    echo "<h1>".$p->getHello("Jota")."</h1>";

    
    //echo "<h1> ".$p."</h1>";

    ?>

    <p><code>$p->getHello("Jota")</code>
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