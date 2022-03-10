<?php

include("conexion.php");
$con=conectar();

$Id_Alumno=$_GET['id'];

$sql="DELETE FROM students  WHERE Id_Alumno='$Id_Alumno'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: alumno.php");
    
    }
?>