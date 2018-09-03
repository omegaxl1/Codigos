<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Productos</title>
</head>
<body>
    <h1>Productos</h1>
    <table border="1">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Talla</th>
                <th>Precio</th>

            </tr>
        </thead>
        <tbody>
        <?php foreach($productos as $producto): ?>
            <tr>
            <td><?= $producto->id ?> </td>
            <td><?= $producto->nombre ?> </td>
            <td><?= $producto->talla ?> </td>
            <td><?= $producto->precio ?> </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
        
    </table>
</body>
</html>