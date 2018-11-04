<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class vitalsign extends Model
{
  use SoftDeletes; 
     protected $fillable = [
        'heartrate','head_circunference','bloodpressure','weight','breathingfrequency','temperature','oxygensaturation','id_ims','size','id_patient','id_user',
    ];


 	public function ims(){

   
      return $this->belongsTo(im::class,'id_ims');
    }

      public function medic(){

   
  		return $this->belongsTo(User::class,'id_user');
    }


}
