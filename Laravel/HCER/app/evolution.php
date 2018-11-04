<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;	
class evolution extends Model
{
	use SoftDeletes; 
    protected $fillable = [
    	'devolution','id_patient','id_user',
    ];

      public function medic(){

   
      return $this->belongsTo(User::class,'id_user');
    }
}
