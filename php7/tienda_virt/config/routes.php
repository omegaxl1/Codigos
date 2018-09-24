<?php

define('ROUTES',[
    ''=>['controller'=>'Page', 'action'=>'index'],
    'nosotros'=>['controller'=>'Page', 'action'=>'about'],
    'productos'=>['controller'=>'Article', 'action'=>'index'],
    'producto'=>['controller'=>'Article', 'action'=>'show'], 
    'contacto'=>['controller'=>'Page', 'action'=>'contact'],

]);