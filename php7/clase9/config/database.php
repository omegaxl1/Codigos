<?php

use Illuminate\Database\Capsule\Manager as Capsule;

$capsule = new Capsule;

$capsule->addConnection([
    'driver'    => DATABASE['driver'] ?? 'mysql',
    'host'      => DATABASE['host'] ?? 'localhost',
    'database'  => DATABASE['database'] ?? 'tienda',
    'username'  => DATABASE['username'] ?? 'my-username',
    'password'  => DATABASE['password'] ?? 'my-password',
    'charset'   => DATABASE['charset'] ?? 'utf8',
    'collation' => DATABASE['collation'] ?? 'utf8_unicode_ci',
    'prefix'    => DATABASE['prefix'] ?? '',
]);

$capsule->bootEloquent();
