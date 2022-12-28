<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MultipleImage extends Model
{
    use HasFactory;
    protected $fillable= [
        'images',
        'user_id',
        'status'
        ];
}
