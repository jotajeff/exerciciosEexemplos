<?php

// save session 
 // session_save_path(__DIR__.'\sessions');

session_start();

$_SESSION['myUser'] = [
    'name'   => 'Jota',
    'age'    => 49,
    'status' => true,
    'rate'   => 4.3
];

$_SESSION['device'] = 'desktop';
// delete session
// unset($_SESSION['myUSer']);

$data = date('d/m/Y');

// settting cookie

setcookie('meuCookie','Macherri',time()+(60*2));

// clean the cookie
// setcookie('meuCookie','Macherri',time()-1);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Session | Cookies ::</title>

<!-- css -->
<link rel="stylesheet" href="css/bootstrap.min.css" >

<style>
    body {
        background-image : url('img/mascote.jpg');
        
        background-repeat: no-repeat;
        background-attachment : fixed;
        
        
        margin-top:20px;
    }

    .shadow {
        -webkit-box-shadow: 1px 11px 44px 10px rgba(0,0,0,0.38);
        -moz-box-shadow: 1px 11px 44px 10px rgba(0,0,0,0.38);
        box-shadow: 1px 11px 44px 10px rgba(0,0,0,0.38);
    }
    
    .stroke {
        border : thin solid #696969;
    }
</style>

</head>
<body>


<div class="container">

    <div class="jumbotron shadow stroke">
        <h1 class="display-3">Learning PHP Session | Cookies </h1>
        <hr class="my-2">
        <p class="lead"> <?=$data?></p>
    </div>


    <div class="card bg-secondary text-white">
    <div class="card-header"> Exercício 1  </div>
    <div class="card-body">

    <p class="card-text">
     teste :: 
    </p>

  </div>
</div>



<a href="../exercicio1.php"><button type="button" class="btn btn-primary">Look the Cookie</button></a>

<a href="other/index.php"><button type="button" class="btn btn-primary">First</button></a>

<a href="other/fim-session.php"><button type="button" class="btn btn-primary">Last</button></a>

</div><!-- container -->



<!-- js -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</body>
</html>