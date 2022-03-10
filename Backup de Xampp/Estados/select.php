<?php

$mysql = new mysqli('localhost', 'root', 'mysql', 'videojuego');
$mysql->set_charset("utf8");

$res = $mysql->query("SELECT clave, Descripcion FROM estados ORDER BY descripcion");

$send = '';
while ($row = $res->fetch_array(MYSQLI_ASSOC))
{
	$send .= $row['clave'] . " - " . $row['descripcion'] . "<br>";
    $send .= ;	
}
print $send;  // <------


?>