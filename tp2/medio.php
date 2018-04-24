<?php
/**
 * Created by PhpStorm.
 * User: gera
 * Date: 24/04/18
 * Time: 16:28
 */

$var1 = intval($_GET['medio1']);
$var2 = intval($_GET['medio2']);
$var3 = intval($_GET['medio3']);

$elmedio;

if ($var1 > $var2 && $var2 < $var3){
    $elmedio = $var2;
}

if ($var1 > $var3 && $var3 < $var2){
    $elmedio = $var3;
}

if ($var2 > $var1 && $var1 < $var3){
    $elmedio = $var1;
}


?>

<!doctype html>
<html lang="en">
<head>
    <title>intercambio de variables</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
<div class="jumbotron">
    <h1 class="display-3">EL MAYOR DE LOS TRES NUMEROS</h1>
    <p class="lead"><?php echo  "El menor es => $elmenor" ?></p>
    <hr class="my-2">
    <p class="lead">
        <a class="btn btn-primary btn-lg" href="index.php" role="button">Volver a la lista</a>
    </p>
</div>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>