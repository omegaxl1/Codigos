<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class rconsultation extends Model
{
  use SoftDeletes; 

     protected $fillable = [
			'reason','id_vitalg','id_exploregions','id_evolu','id_diagnosi','id_patient','id_user',
     ];


    public function scopeRconsul($query, $search) {
      return $query->where('reason','LIKE',"%$search%");
   }


      public function vitalsign(){

   
  		return $this->belongsTo(vitalsign::class,'id_vitalg');
    }

     public function exploregion(){

   
  		return $this->belongsTo(exploregion::class,'id_exploregions');
    }


  
     public function treat(){


      
      return $this->belongsTo(diagnosi::class,'id_diagnosi');
    }

   
    
     public function evolution(){

   
  		return $this->belongsTo(evolution::class,'id_evolu');
    }
     public function medic(){

   
  		return $this->belongsTo(User::class,'id_user');
    }


     public function getreasonShortAttribute()
    {
    	return mb_strimwidth($this->reason, 0, 100, '...');
    }


}
