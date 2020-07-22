<?php  include_once('ads/ads.php'); ?>
<?php
$title = "Injection";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?></title>

<!-- css -->
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

<style>
    body {
        margin-top : 20px;        
    }
    </style>
</head>
<body class="bg-primary">

<div class="container">
    
<div class="jumbotron">
    <h1 class="display-3"><?= $title; ?></h1>
    <?= calendar() ?>
    <?= materialDesign("description") ?>
</div>



<?php 

try {
    $conn  = new \PDO ("mysql:host=localhost;dbname=avenida_db","root","mysql");

    $query = "Select * from Students Where id = {$_GET['id']}";

    if($query){
        echo $table;
    }
    
    foreach ($conn->query($query) as $student ){
        echo "<tr>";
        echo "<td>  ".$student['dsName']."</td>";
        echo "<td>".$student['dsEmail']."</td>";
        echo "</tr>";

    }
    

} catch(\PDOException $e) {

    echo 'Error ! Message : '.$e->getMessage()." Code : ".$e->getCode();


}

?>

</div>

</table>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
