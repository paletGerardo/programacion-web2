<?php



$user = $_GET['usuario'];
$pass = $_GET['clave'];

if ($user == "palet" && $pass == "123") {
    session_set_cookie_params(5000);
    $_COOKIE['nombre'] = $user;
    header('Location: home.php?variable='.$user);
}else {
    header('Location: error.php');
}