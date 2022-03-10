<?php
function conectar(){
    $servidor = "localhost";
    $nombreusuario = "Anghelo";
    $password = "anghecrazy0102";
    $db = "pruebas";

    $conexion = new mysqli($servidor, $nombreusuario, $password, $db);

    if($conexion->connect_error){
        die("Conexión fallida: " . $conexion->connect_error);
}
?>