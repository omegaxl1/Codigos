<?php

namespace App\Libraries;

use App\Controllers\ArticleController;


class Route 
{
    public static function any($controller = null, $action = 'index')
    {
        if ($controller)
        {
            $controller = "\\App\\Controllers\\{$controller}Controller";
            $controller = new $controller;
        }
        else
        {
            $controller = new ArticleController;
        }
        if (method_exists($controller, $action))
        {
            return $controller->$action();
            
        }
        else
        {
            header('HTTP\1.0 404 NOT FOUND');
            die('pagina no encontrada');
        }
    }
}