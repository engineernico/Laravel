<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

use phpDocumentor\Reflection\Types\This;
use App\models\Form;


use App\models\Phone;

class User extends Authenticatable //this class will find out table named by [users]
{
    use Notifiable;


    protected $hidden = ['password', 'remember_token'];
    protected $fillable = ['name', 'email','mobile', 'password','expire'];
    protected $casts = [ 'email_verified_at' => 'datetime',];



    public function soaad(){
        return $this->hasOne('App\models\Form','user_id');
    }


    public function phone(){
        return $this-> hasOne('App\models\Phone','user_id');
    }

}


