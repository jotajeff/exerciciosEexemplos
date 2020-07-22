<?php
include "ads/my_functions.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form PHP </title>


    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <style>
        body {
            margin-top: 1.0em;
            margin-bottom: 1.0em;
        }
    </style>


</head>

<body class="bg-dark">

    <div class="container">

        <div class="jumbotron">
            <h1 class="display-3">Form PHP</h1>
            <p><?= showIcon('keyboard')?></p>

        </div>


        <div class="card">
            <div class="card-header">

            <p class="lead">Formulário de Contato <span class="text-right"><?=showIcon("email")?></span></p>

            </div>

            <div class="card-body">

                <form action="send.php" method="post">

                    <div class="form-group">
                        <label for="exampleFormControlInput1">Nome</label>
                        <input type="text" name="nome" class="form-control" placeholder="type name">
                    </div>


                    <div class="form-group">
                        <label for="exampleFormControlInput1">Email address</label>
                        <input type="email" name="email" class="form-control" placeholder="name@example.com">
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Descrição</label>
                        <textarea class="form-control" name="descricao" rows="3" placeholder="Type message"></textarea>
                    </div>



                    <input type="submit" class="btn btn-primary" value="Send">



                </form>

            </div>
        </div>
        <!-- card -->


    </div>
    <!-- container -->
    <!-- engine  -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
        crossorigin="anonymous"></script>

</body>

</html>