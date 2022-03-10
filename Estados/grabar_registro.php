<?php

$mysql = new mysqli('localhost', 'root', 'anghecrazy0102', 'lista estados ang');
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
   http://192.168.1.70/b4a/grabar_registro.php?correo=anghecrazy011@gmail.com&nombre=Anghelo&contra=1234&estado=10
*/


?>