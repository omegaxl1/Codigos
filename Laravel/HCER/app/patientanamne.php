<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class patientanamne extends Model
{

	
     protected $fillable = [
        'allergies','p_pathologies','f_pathologies','surgical','alcohol','smoking','drugs','inmunizaciones','others','id_patient','id_user',
    ];

     public function user(){

   
  		return $this->belongsTo(User::class,'id_user');
    }


       public function medic(){

   
      return $this->belongsTo(User::class,'id_user');
    }
}
