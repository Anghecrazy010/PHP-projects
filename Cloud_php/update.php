<?php

include("conexion.php");
$con=conectar();

$id_alumno=$_POST['id_alumno'];
$Nombre=$_POST['Nombre'];
$Apellido=$_POST['Apellido'];
$Edad=$_POST['Edad'];
$Direccion_Residencia=$_POST['Direccion_Residencia'];

$sql="UPDATE students SET  Nombre='$Nombre',Apellido='$Apellido',Edad='$Edad',Direccion_residencia'$Direccion_Residencia' WHERE id_alumno='$id_alumno'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: alumno.php");
    }
?>