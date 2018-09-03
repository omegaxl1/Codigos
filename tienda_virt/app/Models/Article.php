<?php
 namespace App\Models;

 use Illuminate\Database\Eloquent\Model;


 class Article extends Model
 {
     protected $table = 'articles';

     public function sizes()
     {
         return $this->belongsToMany('App\Models\Size');
     }

 }