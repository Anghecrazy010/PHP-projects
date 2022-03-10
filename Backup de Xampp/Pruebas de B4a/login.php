<?php

$mysql = new mysqli('localhost', 'root', '', 'videojuego');
$mysql->set_charset("utf8");

$username = $_GET['usuario'];
$contra = $_GET['contra'];

$res = $mysql->query("SELECT correo, pswd FROM usuarios WHERE correo = '$username'");
//printf('$res');

$row_cnt = $res->num_rows;

if ($row_cnt == 0) {    //cambiar esta madre
    //error de query vacío
    $xml = new SimpleXMLElement("<mensaje/>");
    $trk = $xml->addChild("resultado", "no"); //no existe el usuario
} else{
    //comparar contraseñas
    $row = $res->fetch_array(MYSQLI_ASSOC);
    $correo = $row['correo'];
    $pswd = $row['pswd'];

    if ($contra == $pswd) {
        // contraseña y usuario coinciden
        $xml = new SimpleXMLElement("<mensaje/>");
        $trk = $xml->addChild("resultado", "si");
    } else{
        //la contraseña no coincide con el usuario...
        $xml = new SimpleXMLElement("<mensaje/>");
        $trk = $xml->addChild("resultado", "nose");
    }
}

Header("Content-type: text/xml");
print($xml->asXML()); 

$mysql->close();
?>

<!--

$xml = new SimpleXMLElement("<mensaje/>");
$trk = $xml->addChild("resultado", "si");

Header("Content-type: text/xml");
print($xml->asXML()); 
-->