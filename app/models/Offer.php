<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Offer extends Model // this class will find out table named by [offers]
{
    protected  $table = 'registeration';
    protected  $fillable = ['fname,lname'];

    public $timestamps = false;
}
