<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    use HasFactory;
    protected $guarded=[];

    protected $table = "unit";

    public $timestamps = true;

    protected $fillable = [

      'id','unitname','created_at','updated_at'

      ];
}
