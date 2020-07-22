<?php

if ($_SERVER['REQUEST_METHOD']=='POST'){
    
    $nome = $_POST['idade'];

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form PHP</title>

    <link rel="stylesheet" href="css/bootstrap.min.css">

        <style>
        body {
            margin-top : 1.0em;
            background-image: url( '/img/mascote.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-position: right bottom;
            background-size: 25%;

        }

        .shadow {
            box-shadow: 5px 10px 18px #888888;
        }

        .stroke {
            border : thin solid #cacaca;
        }
        </style>

</head>
<body class="bg-light">

<div class="container">
    
<div class="jumbotron shadow stroke">
    <h1 class="display-3">form PHP</h1>
    <hr class="my-2">
</div>



<form action="" method="post" class="bg-secondary p-2 text-white">

<div class="form-group">
  <label for="">Nome </label>
  <input type="text"
    class="form-control" name="nome" id="" aria-describedby="helpId" placeholder="Type">
</div>

<button type="submit" class="btn btn-primary">Submit</button>

</form>

<br /><br />

</div>
<!-- container -->

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
