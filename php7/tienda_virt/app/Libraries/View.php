<?php

namespace App\Libraries;

class View
{
    public static function render($fileView, array $variables =[])
    {
        extract($variables);

        require_once APP_PATH . "/views/$fileView.view.php";
    }
}