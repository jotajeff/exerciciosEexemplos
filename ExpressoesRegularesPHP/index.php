<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Preg_match</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

</head>
<body>
    
<div class="container">
    

<div class="card">
<div class="card-header">Expression regular</div>
    <div class="card-body">
        
    
<?php

$lookfor = $_POST['lookfor'];

if(is_null($lookfor)){

echo'    
<form action="" method="post">

<label>Findo for .... <br><input type="text" name="lookfor"></label>

<input type="submit" value="Findo Now">

</form>';

}else{


//$lookfor = "Hello World ";

echo "<p>I am lookin for  : ".$lookfor;

echo "<p>Tamanho do lookfor : ".strlen($lookfor);

/*
if(preg_match("/^[A-Z0-9-]{39}$/",$lookfor))
{
    echo "<p>Hyeah, I  Find  my number $lookfor ";

} 

*/

if (preg_match("/^[0-9]$/",$lookfor)) {

    echo "<p> allow Only numbers : $lookfor";
} else {


echo "No no  ";

}




echo "<br><a href='?lookfor='>Clear lookfor</a>";

}

?>

</div>
</div>
<!-- card -->


</div>
<!-- container -->

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>
