<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabela com Array</title>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
    body {
        margin-top:1.0em;
        margin-bottom:1.0em;
    }
    </style>

</head>
<body class="bg-dark">
    
<div class="container">
    <div class="card">
        <div class="card-header"> <span class="display-4"> my Tests </span></div>
        <div class="card-body">
            
  
            <?php
              
                $titles = array("ID", "Nome", "ID", "Curso", "Status","Valor $", "Comissão CMX", "Cód. Transação"); 
                foreach ($titles as $value) {
                    $html.= "<p> $value </p>";
                }

                echo  $html;
            
                echo "<hr>";

                $titles = array("ID", "Nome", "ID", "Curso", "Status","Valor $", "Comissão CMX", "Cód. Transação"); 
                echo $titles[1];

                echo "<hr>";

                $cores = array("Azul","Amarelo","Vermelho","Rosa","Verde");
    foreach ($cores as $key => $value) { 
        echo "Minha cor no indice ".$key." é ".$value."<br/>";
    }


            ?>
        
        </div>
        <div class="card-footer text-muted">
        <a href="index.php">Table With Array</a>
        </div>

       
    </div>
<!--  card -->

</div>
<!--  container -->

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>