<?php

namespace App;

use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use App\Notifications\ResetPasswordNotification;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
    use SoftDeletes;  
   

  // protected $table ='users'; 

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'ci','name', 'lastname','birthday','address','phone','email', 'password','id_role','id_user','id_specialty',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


 public function getIsAdminAttribute()
    {
        return $this->id_role == 1;
    }
    public function getIsMedicAttribute()
    {
        return $this->id_role == 2;
    }
    public function getIsEnfemrAttribute()
    {
        return $this->id_role == 3;   
    }
     public function getIsRecpAttribute()
    {
        return $this->id_role == 4;   
    }

 public function especial(){

   
      return $this->belongsTo(Specialty::class,'id_specialty');
    }

public function scopeCi($query, $search) {
      return $query->where('ci','LIKE',"%$search%");
   }
 public function scopeUsers($query, $rol) {
      return $query->where('id_role', $rol);
   }

   public function scopeUserCi($query, $ci) {
      return $query->where('ci',$ci);
   }

    public function scopeUserEmail($query, $email) {
      return $query->where('email',$email);
   }

    public function scopeEsp($query, $esp) {
      return $query->where('id_specialty',$esp);
   }


   public function sendPasswordResetNotification($token)
    {
        $this->notify(new ResetPasswordNotification($token));
    }
}
