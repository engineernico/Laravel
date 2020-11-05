<?php

namespace App\models;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $table = 'admins';
    protected  $fillable = ['id','fname','lname','email','password'];
    public $timestamps = false;
}
