<?php
include("conexion.php");
$con=conectar();

$Id_Alumno=$_POST['Id_Alumno'];
$Nombre=$_POST['Nombre'];
$Apellido=$_POST['Apellido'];
$Edad=$_POST['Edad'];
$Direccion_Residencia=$_POST['Direccion_Residencia'];

$sql = "INSERT INTO students values( '$Id_Alumno', '$Nombre','$Apellido','$Edad','$Direccion_Residencia')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: alumno.php");
    
}else {
}
?>