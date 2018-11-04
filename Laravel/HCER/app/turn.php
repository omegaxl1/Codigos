<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class turn extends Model
{
    protected $fillable =[
			'dateturns','hour','minutes','timezone','id_patient','id_user','id_medic','id_status',
    ];


	 public function statusdate()
	 {

      return $this->belongsTo(statusdate::class,'id_status');
   	 }

   	  public function patientdate()
	 {

      return $this->belongsTo(patient::class,'id_patient');
   	 }

}
