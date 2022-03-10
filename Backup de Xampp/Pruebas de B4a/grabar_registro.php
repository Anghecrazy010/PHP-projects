<?php

$mysql = new mysqli('localhost', 'root', '', 'videojuego');
$mysql->set_charset("utf8");

$s = "INSERT INTO usuarios " .
     " SET correo = '$_GET[correo]', "  .
     "     nombre = '$_GET[nombre]', " . 
     "     pswd = '$_GET[contra]', " .
     "     estado = '$_GET[estado]' "; 
$mysql->query($s);
//$res = "si";

$mysql->close();


$xml = new SimpleXMLElement("<mensaje/>");
$trk = $xml->addChild("resultado", "si");

Header("Content-type: text/xml");
print($xml->asXML()); 

/*
   <mensaje>
      <resultado>si</resultado>
   </mensaje>


 GET   <-------
 POST
   http://192.168.100.2:8888/b4a/grabar_registro.php?correo=morphoss@gmail.com&nombre=Rafael&contra=1234&estado=10
*/


?>