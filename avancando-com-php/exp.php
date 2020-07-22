
    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Expresões PHP</title>

    <link rel="stylesheet" href="css/bootstrap.min.css">

    <style>
    body {
      margin-top : 20px;
      /* Permalink - use to edit and share this gradient: https://colorzilla.com/gradient-editor/#1e5799+0,2989d8+50,207cca+64,7db9e8+100 */
background: #1e5799; /* Old browsers */
background: -moz-linear-gradient(top,  #1e5799 0%, #2989d8 50%, #207cca 64%, #7db9e8 100%); /* FF3.6-15 */
background: -webkit-linear-gradient(top,  #1e5799 0%,#2989d8 50%,#207cca 64%,#7db9e8 100%); /* Chrome10-25,Safari5.1-6 */
background: linear-gradient(to bottom,  #1e5799 0%,#2989d8 50%,#207cca 64%,#7db9e8 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#1e5799', endColorstr='#7db9e8',GradientType=0 ); /* IE6-9 */

    }
    .shadow {
      -webkit-box-shadow: -2px 5px 26px -2px rgba(0,0,0,0.75);
    -moz-box-shadow: -2px 5px 26px -2px rgba(0,0,0,0.75);
    box-shadow: -2px 5px 26px -2px rgba(0,0,0,0.75);
    }

    .stroke {
      border: thin solid #cacaca;
    }
    </style>

</head>

<body class="bg-primary">

<div class="container">

<div class="jumbotron jumbotron-fluid shadow stroke">
    <div class="container">
        <h1 class="display-4">PHP Expressões Regulares</h1>
    </div>
</div><!-- jumbotrom -->

<div class="card shadow">
  <div class="card-header">
    Expressões  PHP
       
  </div>
  <div class="card-body">

  <?php
  $string = "Jeferson";
  //$padrao = "/^J/";
  $padrao = "/[a-z]{1,3}/i";

  if(preg_match($padrao,$string)):
      echo "<p>Existe : " .$string."</p>";
      
  else :
        echo "<p>no hay</p>";

  endif
  ?>



</div>
</div>

<br><br>


<div class="card shadow bg-secundary">
  <div class="card-header">
    Expressões  PHP
       
  </div>
  <div class="card-body">

  <?php
  

  function limpaCPF_CNPJ($valor){
  $valor = preg_replace('/[^0-9]/', '', $valor);
     return $valor;
  }
  
  echo $valor = limpaCPF_CNPJ('580/.1  92 2550/92');
  ?>



</div>
</div>

<br><br>


<div class="card shadow bg-info">
  <div class="card-header">
    Expressões  PHP
       
  </div>
  <div class="card-body">

  <?php
  
  function nameFileCSV(){

    $fuso = new DateTimeZone('America/Sao_Paulo');
        $data = new DateTime();
        $data->setTimezone($fuso);
        $result = $data->format('Y-m-d H:i');
        $result = preg_replace('/[^0-9]/', '', $result);
        /*
        $result = str_replace("-", "", $result);
        $result = str_replace(":", "", $result);
        $result = str_replace(" ", "_", $result);
        */
        return  $result.".csv";
    
    }
  
  echo "<p>Nome do Arquivo final : ".$valor = nameFileCSV();
  ?>

    <hr>

    <?php
$str = 'hypertext language programming';
$chars = preg_split('/ /', $str, -1, PREG_SPLIT_OFFSET_CAPTURE);
print_r($chars);
?>

</div>
</div>

<br><br>
<!-- return -->


<br><br>

</div>
<!-- container -->


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>