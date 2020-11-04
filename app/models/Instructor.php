<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Instructor extends Model
{
    protected $table = 'instructors';
    protected  $fillable = ['id','fname','lname','age','address','numOfCourses','experience','email','password'];
    public $timestamps = false;
    protected $guard = 'instructor';
}
