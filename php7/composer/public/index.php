<?php

require_once  __DIR__ . '/../config/app.php';

use App\Models\Producto;

$productos = Producto::where('nombre','like','%o')->get();

//var_dump($productos->toJson());
//$productos = Producto::all();

include_once APP_PATH . 'views/productos/index.view.php';    