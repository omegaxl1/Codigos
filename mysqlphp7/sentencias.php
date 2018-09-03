<?php

/*
* CONECTAR  
*/

$mysqli = new mysqli('127.0.0.1','root','','tienda');

/*verficar la conexion*/

if($mysqli->connect_errno)
{
    echo 'Falló al conectar a mysql:'. $mysqli->connect_error . PHP_EOL;
}

//preparacion
$sql = "INSERT INTO productos (nombre, talla, precio) VALUES (?,?,?)";
$sentencia = $mysqli->prepare($sql);

if (!$sentencia)
{
    echo "Falló la preparación:({$mysqli->errno}) {$mysqli->error}.\n";

}

//vincular parámeros
$nombre = 'Items 8';
$talla = 'S';
$precio = 2000;

if (!$sentencia->bind_param('ssi', $nombre, $talla, $precio))
{
    echo "Fallo la vinculación: ({$mysqli->errno}) {$mysqli->error},\n";
}
//ejecutar
if (!$sentencia->execute())
{
    echo "Fallo la ejecucion: ({$mysqli->errno}) {$mysqli->error},\n";
}
else 
{
    echo "{$sentencia->affected_rows} Fila Insertada.\n";
    
}
$sentencia->close();
//preparar 
 $sql = 'SELECT nombre, precio FROM productos';
 $sentencia2 = $mysqli->prepare($sql);
 //ejecutar
$sentencia2->execute();

//vincular resultados
$sentencia2->bind_result($nombre, $precio);

//usar datos 
while ($fila = $sentencia2->fetch())
{
    echo "{$nombre} cuesta {$precio}.\n";
}

//cerrar la sentencia
$sentencia2->close();

//cerrar la conexion

$mysqli->close();
