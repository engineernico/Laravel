<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    protected $table='video';
    protected $fillable = ['id','name','viewers'];
    public $timestamps = false;
}
