<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class exploregion extends Model
{
	use SoftDeletes; 
     protected $fillable = [
       'id_head','id_eyes','id_ears','id_nose','id_mouthpharynx','id_neck','id_cardiopulmonary','id_nervousystem','id_abdomen','id_extremities','details','id_patient','id_user',
    ];

     public function medic(){

   
  	return $this->belongsTo(User::class,'id_user');
    }

    public function head(){
    	return $this->belongsTo(cpsp::class,'id_head');	
    }

    public function eyes(){
    	return $this->belongsTo(cpsp::class,'id_eyes');	
    }

    public function ears(){
    	return $this->belongsTo(cpsp::class,'id_ears');	
    }


    public function nose(){
    	return $this->belongsTo(cpsp::class,'id_nose');	
    }
       public function abdomen(){
    	return $this->belongsTo(cpsp::class,'id_abdomen');	
    }

      public function mouthpharynx(){
    	return $this->belongsTo(cpsp::class,'id_mouthpharynx');	
    }

      public function neck(){
    	return $this->belongsTo(cpsp::class,'id_neck');	
    }
     public function cardiopulmonary(){
    	return $this->belongsTo(cpsp::class,'id_cardiopulmonary');	
    }

       public function nervousystem(){
    	return $this->belongsTo(cpsp::class,'id_nervousystem');	
    }
       public function extremities(){
    	return $this->belongsTo(cpsp::class,'id_extremities');	
    }
    
    

}
