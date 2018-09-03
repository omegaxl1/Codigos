<?php

require_once '../config/app.php';

use App\Models\Producto;

$productos = Producto::all();
// SELECT * FROM productos;

//$productos = App\Models\Producto::where('nombre', 'LIKE', '%s')->get();

include_once APP_PATH . 'views/productos/index.view.php';
