<?php
include("conexion.php");
$con=conectar();

$id_alumno=$_POST['id_alumno'];
$Nombre=$_POST['Nombre'];
$Apellido=$_POST['Apellido'];
$Edad=$_POST['Edad'];
$Direccion_Residencia=$_POST['Direccion_Residencia'];

$sql = "INSERT INTO Students( '$Id_alumno', '$Nombre','$Apellido','$Edad','$Direccion_Residencia')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: alumno.php");
    
}else {
}
?>