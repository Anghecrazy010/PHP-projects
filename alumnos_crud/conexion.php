<?php
function conectar(){
    $servidor = "localhost";
    $nombreusuario = "Anghelo";
    $password = "anghecrazy0102";
    $db = "pruebas";

    

    $con=mysqli_connect($servidor,$nombreusuario,$password);

    mysqli_select_db($con,$db);

    return $con;
}
?>