<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class invdetails extends Model
{
    use HasFactory;
    public $table = "invdetails";
    public $fillable = ['id','invno','invdate','itemname','qty','tax','rate','amt','hsnnumber'];
}
