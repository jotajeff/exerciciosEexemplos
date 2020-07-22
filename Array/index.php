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
        <div class="card-header"> <span class="display-4"> Table with Array </span></div>
        <div class="card-body">
            
  
            <?php
      
            $html  ='';
            $html .='<table class="table table-striped table-bordered table-hover">';
            $html .='<thead class="thead-dark">';
            $html .='<tr>';
            $html .= headerTable();
            $html .='</tr>';
            $html .='</thead>';
            $html .=footerTable();
            $html.='</table>';

            echo $html;
        

            //<!--  fnc -->

            function headerTable(){

        
                $titles = array("ID", "Nome", "ID", "Curso", "Status","Valor $", "Comissão CMX", "Cód. Transação"); 
                foreach ($titles as $value) {
                    $html.= "<th> $value </th>";
                }

                return $html;
            }

            //$misturada = str_shuffle($str);
        function footerTable(){
            
            for ($i = 1 ; $i <= 20 ; $i++){
                
            $html .='<tr>';
                $column = array($i, "Jota Silva", "345", "Web Database", "Ativo",$i+0.5, $i*2 , "Pagseguro"); 
                foreach ($column as $value) {
                    $html .= "<td> $value </td>";
                }
            $html .='</tr>';
                
        }

            return $html;
        }

    ?>
        
        </div>
        <div class="card-footer text-muted">
        <a href="myTests.php">MyTests</a>
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