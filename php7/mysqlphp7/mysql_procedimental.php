<?php
/*
* conectar y ejecutar las sentencias sql
*/

$mysqli =  mysqli_connect('127.0.0.1','root','','tienda');


/* probar la conexión sql */
if (mysqli_connect_errno($mysqli))
{
echo 'Fallo la conenectar a MySQL;'. mysqli_connect_error();
}

/* ejecutar consulta*/
$resultado = mysqli_query($mysqli,"SELECT nombre, precio FROM productos");

/* listar */
while($fila = mysqli_fetch_assoc($resultado) )
{
echo $fila['nombre'] . 'cuesta' . $fila['precio'] . PHP_EOL;
}
/* liberar memoria de la consulta*/
mysqli_free_result($resultado);

/* cerrar la consulta*/
mysqli_close($mysqli);