<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JQuery</title>

<!-- css -->

<link rel="stylesheet" href="css/bootstrap.min.css">

<style>
    body {
        margin-top: 1.0rem;
        background-image: url('img/jquery.png');
        background-attachment: fixed;
        background-position: bottom right;
        background-size: 25%;
        background-repeat: no-repeat;
    
    }

    section{
        width: 100%;
        margin-top: 10px;
        margin-bottom: 10px;
        background-color: #cacaca; 
        
        
        padding: 20px;
        display: flex;
        justify-content: space-between;
        
    }

</style>

<!-- js -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script src="js/exercicio1.js"></script>

<script>

//function clearForm(){
//document.getElementById("myForm").reset();

function clearForm(){
$(":input").val("");
}




</script>


</head>
<body class="bg-dark">
    

<div class="container">

    <div class="jumbotron">
        <h4 class="display-3">JQuery</h4>
        
    </div>

    <h1 id="title"></h1>
    <p id="desc"></p>


<section>




<?php

echo "<form id='myForm'>";


for($i = 1 ; $i <=4 ; $i++){

echo "<p><input type=\"radio\" name=\"myQuery\" id=\"myQuery\" value = ".$i.">Valor $i</p>";

}

echo "</form>";

?>



<?php

echo "<form id='myForm'>";


for($i = 10 ; $i <=15 ; $i++){

echo "<p><input type=\"radio\" name=\"myQuery\" value = ".$i.">Valor $i</p>";

}

echo "</form>";

?>



<button class="btn btn-primary" id="btnClear" onclick="clearForm()">Clear()</button>



</section>




</div>
<!-- container -->

<!-- boot -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>
</html>