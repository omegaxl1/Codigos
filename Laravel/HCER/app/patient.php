<?php

namespace App;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class patient extends Model
{

	  use SoftDeletes;   
     protected $fillable = [
        'ci','namef','namel','birthday','address','phone','occupation','id_contact','namecontact','contphone',
        'email','id_gender','id_bloodtype','id_user',
    ];

  public function medic(){

   
      return $this->belongsTo(User::class,'id_user');
    }

     public function bloodtype(){

   
  		return $this->belongsTo(bloodtype::class,'id_bloodtype');
    }

     public function gender(){

   
  		return $this->belongsTo(gender::class,'id_gender');
    }


    
public function scopeCi($query, $search) {
      return $query->where('ci','LIKE',"%$search%");
   }
   
   public function scopePatientCi($query, $ci) {
      return $query->where('ci',$ci);
   }

    public function scopePatientEmail($query, $email) {
      return $query->where('email',$email);
   }
}
