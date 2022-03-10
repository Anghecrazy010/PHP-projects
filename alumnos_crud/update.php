<?php

include("conexion.php");
$con=conectar();

$Id_Alumno=$_POST['Id_Alumno'];
$Nombre=$_POST['Nombre'];
$Apellido=$_POST['Apellido'];
$Edad=$_POST['Edad'];
$Direccion_Residencia=$_POST['Direccion_Residencia'];

$sql="UPDATE students SET  Nombre='$Nombre',Apellido='$Apellido',Edad='$Edad',Direccion_residencia = '$Direccion_Residencia' WHERE Id_Alumno='$Id_Alumno'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: alumno.php");
    }
?>