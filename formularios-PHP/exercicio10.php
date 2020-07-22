

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form PHP</title>

    <!-- CSS  -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <!-- js -->
    
    <script src="js/jquery-3.5.1.min.js"></script>
    <script>
        $(function(e){
            $('#janela').hide();

            $('#mostrar').click(mostrarElemento)
            
            $('#esconder').click(esconderElemento)

            $('#inverter').click(inverterElemento)
        
        });

        function mostrarElemento(){
            $('#janela').show();
        };
        
        function esconderElemento(){
            $('#janela').slideDown("slow");
        };

        function inverterElemento(){
            $('#janela').toggle();
        };

    </script>

        <style>
        body {
            margin-top : 1.0em;
            background-image: url( '/img/mascote.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-position: right bottom;
            background-size: 20%;

        }

        .shadow {
            box-shadow: 5px 10px 18px #888888;
        }

        .stroke {
            border : thin solid #cacaca;
        }

        #cadastro {
            display: <?= $displayValue?>;
        }

        #janela {
            width : 200px;
            height :200px;
            background : #c9c9c9;
            border : thin solid #969696;

        }
        </style>

</head>
<body class="bg-light">

<div class="container">
    
<div class="jumbotron shadow stroke">
    <h1 class="display-3"><?= showIcon('description');?> &nbsp; JQuery </h1>
    <hr class="my-2">
   
</div>
    
  


<br /><br />


<input class="btn btn-primary" type="button" id="mostrar" value="Mostrar">
<input class="btn btn-secondary" type="button" id="esconder" value="Esconder">
<input class="btn btn-warning" type="button" id="inverter" value="Inverter">

<br /><br />
 
<div id="janela"></div>

</div>
<!-- container -->

<!-- fnc -->

<?php 

function showIcon($icon){
    $icon = "<span class=\"material-icons\">$icon</span>";
    return $icon;
}

?>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>



</body>
</html>
