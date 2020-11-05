<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;
use App\User;
class Form extends Model
{
<<<<<<< HEAD
    protected $table = 'forms_curd';
    protected  $fillable = ['id','fname','lname','photo','user_id'];
    protected  $hidden = ['user_id'];
=======
    protected $table = 'forms';
    protected  $fillable = ['id','fname','lname','photo'];
>>>>>>> 26b976b22f26183ec3e7f760aca63ff0eb541502
    public $timestamps = false;

public function user(){
        return $this->belongsTo('App\User','user_id');
    }
}
