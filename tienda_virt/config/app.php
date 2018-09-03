<?php

define('APP_PATH', __DIR__ .'/../');
define ('PUBLIC_PATH','http://localhost/tienda_virt/public/');
require_once APP_PATH . 'vendor/autoload.php';

//variables de entrono
require_once 'env.php';
//base de datos
require_once 'database.php';
//rutas de la aplicacion 
require_once 'routes.php';

// correo
require_once 'mail.php';