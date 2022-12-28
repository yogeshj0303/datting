<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ivoice extends Model
{
    use HasFactory;
    public $table = "invoice";
    public $fillable = ['id','cname','invno','invdate','tot','sgst','cgst','igst','gtot','discount',
    'mblnmbr','adrs','state','hsnnmbr','othercharges'
];
}

