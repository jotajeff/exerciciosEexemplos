<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submit</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">


    <script>
    document.getElementById("qChoice").required = true;
    alert('Deve selecionar tipo de Filtro');
    document.getElementById("qChoice").focus();
    </script>

</head>
<body>
    
    <div class="container">
        
    

<?php   





echo "<table class='table table-striped table-bordered'>";

for($i=1 ; $i <= 4 ; $i++){

$dataPayment =  date('d/m/y')+$i ;

echo "<tr><form action=segundo.php method=get>";


    echo "<td>$i</td>";
    echo "<td bgcolor=#cacaca><input type='radio'  name='qChoice' value=\"$dataPayment-byDay\">$dataPayment By Day</td>";
    echo "<td bgcolor=#cacaca><input type='radio'  name='qChoice' value=\"$dataPayment-byName\">$dataPayment by Name</td>";
    echo "<td bgcolor=#cacaca><input type='radio'  name='qChoice' value=\"$dataPayment-byCourse\">$dataPayment by Course</td>";
    echo "<td bgcolor=#cacaca><input type=\"radio\"  name=\"qChoice\" value=\"$dataPayment-byStatus\">$dataPayment by Status</td>";

    echo "<td bgcolor=#969696>" .
    showIcon(cloud_download). 
    "</td>";

    echo "<td bgcolor=#969696><input type='radio' name='qOutput' value=\"down\">$i Down</td>";
    echo showIcon("desktop_mac");
    echo "<td bgcolor=#969696><input type='radio' name='qOutput' value=\"display\">$i Display</td>";
    
    echo "<td><button>Submit</button></td>";

 echo "</form></tr>";


}

echo "</table>";

?>



<hr>

<h1>Tabela </h1>



<table border=5 size=50% cellspaccing=10 cellpadding=10>

<?php 

for($i=1 ; $i <= 10 ; $i++){

echo '<tr><form>

<td>Desktop</td>
<td><span class="material-icons">desktop_mac</span></td>
<td><input type="radio" name="myTest"></td>

<td>HeadSet</td>
<td><span class="material-icons">headset_mic</span>
<td><input type="radio" name="myTest"></td>

</td>

<td><span class="material-icons">
cast
</span></td>

<td> '.showIcon("keyboard").'</td>

<td><button>Click Me</button></td>

</form>
</tr>';

}

?>

</table>


<div class="jumbotron">
    <h1 class="display-3">Show <?=showIcon(keyboard)?></h1>
    
</div>



<?php
/* fnc */

function showIcon($icon){
    $icon = "<span class='material-icons'>$icon</span>";
    return $icon;
}

?>

</div>


<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>
</html>
