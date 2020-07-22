<?php
require __DIR__.'/session.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $_SESSION['user']=[
        'email' => filter_input(INPUT_POST,'email')
    ];
    
    echo '<script>window.location.href="login.php";</script>';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de entrada</title>
 
<!-- css -->
<link rel="stylesheet" href="fase1/css/bootstrap.min.css" >

<style>
    body {
        background-image : url('fase1/img/mascote.jpg');
        background-position: right bottom;
        background-size:25%;
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
        border : thin solid #cacaca;
    }

    * .card {
        margin-top :10px;
        margin-bottom : 10px;
    }
</style>

</head>
<body>


<div class="container">

    <div class="jumbotron shadow stroke">
        <h1 class="display-3">Learning PHP Session | Login </h1>
        <hr class="my-2">
        <p class="lead"> <?=$data?></p>
        
    </div>


    <div class="card bg-info">
     
     <div class="card-header">Login</div>

     <div class="card-body">


    <form method="post" action=""> 
    <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input type="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="Enter email">
        
    </div>
    
    <button type="submit" class="btn btn-primary btn-lg">Submit</button>
    
    </form>

  
    </div>  </div>


    <?php
        include "ads/navbar.php";
    ?>

</div><!-- container -->



<!-- js -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</body>
</html>