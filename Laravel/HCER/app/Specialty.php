<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Specialty extends Model
{


protected $fillable = [
        'n_specialties','detail', 
    ];

   

  public function scopeSpecialtyn($query,$specialty){
  	return $query->where('n_specialties',$specialty);
  }

  public function scopeSp($query,$specialty){
  	return $query->where('n_specialties','LIKE',"%$specialty%");
  }
}
