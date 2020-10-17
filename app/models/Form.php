<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    protected $table = 'forms';
    protected  $fillable = ['fname,lname'];

    public $timestamps = false;
}
