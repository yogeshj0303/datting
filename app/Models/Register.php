<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Register extends Model
{
    protected $guarded=[];
    protected $table = "register";
    public $timestamps = true;

    protected $fillable = [

      'id','fname','email','password','created_at','updated_at','phone'

    ];
}