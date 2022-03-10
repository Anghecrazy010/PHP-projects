<?php

/*
<estados>
<estado clave="1" descripcion="Sinaloa">
<estado clave="2" descripcion="Sonora">
<estado clave="3" descripcion="Nayarit">
</estados>
*/

$mysql = new mysqli('localhost', 'root', 'mysql', 'videojuego');
$mysql->set_charset("utf8");

$res = $mysql->query("SELECT clave, descripcion FROM estados ORDER BY descripcion");

$envio = '<?xml version="1.0" encoding="UTF-8" ?>';
$envio .= "<estados>";
while ($row = $res->fetch_array(MYSQLI_ASSOC))
{
    $envio .= "<estado clave='$row[clave]' descripcion='$row[descripcion]'>";	 
}
$envio .= "</estados>";

print($envio);


/*
<estados>
   <estado clave="1" descripcion="sinaloa">
   <estado clave="2" descripcion="durango">
   .
   .
   .
</estados>
*/
?>