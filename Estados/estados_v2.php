<?php
$mysql = new mysqli('localhost', 'root', 'mysql', 'anghecrazy0102');
$mysql->set_charset("utf8");

$res = $mysql->query("SELECT clave, descripcion FROM estados ORDER BY descripcion");

$xml = new SimpleXMLElement('<estados/>');

while ($row = $res->fetch_array(MYSQLI_ASSOC))
{
    $track = $xml->addChild('estado');
    $track->addChild('clave', $row['clave']);
    $track->addChild('descripcion', $row['descripcion']);	
}	


Header('Content-type: text/xml');
print($xml->asXML());


/*
<estados>
   <estado>
      <clave>1</clave>
      <descripcion>sinaloa</descricpion>
   </estado>
   <estado>
      <clave>2</clave>
      <descripcion>durango</descricpion>
   </estado>
   .
   .
   .
</estados>
*/

?>



