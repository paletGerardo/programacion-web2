<?php
session_start();

$user = $_GET['usuario'];
$pass = $_GET['clave'];

if ($user == "palet" && $pass == "123") {
    header('Location: home.php?variable='.$user);
}else {
    header('Location: error.php');
}