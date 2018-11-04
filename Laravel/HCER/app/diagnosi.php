<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;	
class diagnosi extends Model
{
	use SoftDeletes; 
     protected $fillable = [
     	'id_pers_1','id_pers_2','id_pers_3','id_def_1','id_def_2','id_def_3','treatment','recipe','instructions','id_patient','id_user',];

  public function def1_block(){

   
  		return $this->belongsTo(Cis10::class,'id_def_1');
    }

     public function def2_block(){

   
  		return $this->belongsTo(Cis10::class,'id_def_2');
    }
    public function def3_block(){

   
  		return $this->belongsTo(Cis10::class,'id_def_3');
    }
      public function pers1_block(){

   
  		return $this->belongsTo(Cis10::class,'id_pers_1');
    }
        public function pers2_block(){

   
  		return $this->belongsTo(Cis10::class,'id_pers_2');
    }

        public function pers3_block(){

   
  		return $this->belongsTo(Cis10::class,'id_pers_3');
    }

     public function medic(){

   
      return $this->belongsTo(User::class,'id_user');
    }

}
