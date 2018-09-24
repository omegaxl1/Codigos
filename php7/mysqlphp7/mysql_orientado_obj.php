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

$resultado = $mysqli->query("SELECT nombre,precio FROM productos");


/*listar*/
while($fila = $resultado->fetch_assoc())
{
 echo $fila['nombre'] . 'cuesta' . $fila['precio'] . PHP_EOL; 
}
/*liberar la memoria de la consulta*/
$resultado->free();
/* cerrar la conexión*/
$mysqli->close();