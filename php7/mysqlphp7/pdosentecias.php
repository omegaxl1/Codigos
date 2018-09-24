<?php

try
{
    $pdo = new PDO(
        'mysql:host=127.0.0.1;dbname=tienda',
        'root',
        ''
);
   


    //preparar
    $sqlinsert = 'INSERT INTO productos (nombre, talla, precio) VALUES(:nombre, :talla, :precio)';
    $sentencia = $pdo->prepare($sqlinsert);
    //vincular 
    $sentencia->bindParam(':nombre',$nombre);
    $sentencia->bindParam(':talla',$talla);
    $sentencia->bindParam(':precio',$precio);
    //Ejecutar
    $nombre = 'ItemPdo';
    $talla = 'D';
    $precio = 12300;
    $sentencia->execute();

    //vincular de manera 2
    $sentencia->execute([
         ':nombre'=>'PDoitem2',
        ':talla'=>'R',
        ':precio'=>500
        ]);

    //listar
    $sql = 'SELECT nombre, precio FROM productos';
    $resultado = $pdo->query($sql);
    foreach ($resultado as $fila)
    {
        echo "{$fila['nombre']} vale {$fila['precio']}\n";
    }
 
}
catch ( PDOException $e)
{
    echo 'ERROR !;' . $e->getMessage() . PHP_EOL;
}
finally
{
    $pdo = null;
}