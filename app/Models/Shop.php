<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    use HasFactory;
    protected $guarded=[];

    protected $table = "shop";

    public $timestamps = true;



    protected $fillable = [

        'id','name','fnmbr','scmbr','address','created_at','updated_at'
      ];

}
