<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ExamPaients extends Model
{
   protected $fillable = [
        'title','observations','id_patient','id_user', 
    ];



   public function gettitleShortAttribute()
    {
    	return mb_strimwidth($this->title, 0, 10, '...');
    }

    public function getobservationsShortAttribute()
    {
    	return mb_strimwidth($this->observations, 0, 30, '...');
    }

}
