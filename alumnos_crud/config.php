<?php 

$servidor = "localhost";
$nombreusuario = "Anghelo";
$password = "anghecrazy0102";
$db = "pruebas";

$conn = mysqli_connect($servidor, $nombreusuario, $password, $db);

if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
}

?>