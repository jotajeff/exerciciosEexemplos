<?php

$table ='<table class="table table-dark table-striped">'.
        '<thead>'.
        '<tr>'.
      '<th scope="col">Nome</th>'.
      '<th scope="col">Email</th>'.
      
    '</tr>'.
  '</thead>'.
  '<tbody>';


function calendar() {
  $data = date('d/m/Y');
  echo $data;
}


function materialDesign($icon){
    echo "<span class=\"material-icons\">$icon</span>";
}

function titlePage($title){
    echo $title;
}

?>