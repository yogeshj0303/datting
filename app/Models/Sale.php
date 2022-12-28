<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    protected $guarded=[];
    protected $table = "sale_invoice";
    public $timestamps = true;

    protected $fillable = [
      'id','invoicenumber','fromname','fromaddress','fromphonenumber','fromemail','toname','toaddress','tophonenumber','toemail','orderid','paymentduedate','accountnumber','quantity','product','serialnumber','description','amount','amountdue','subtotal','shippingcharges','total','created_at','updated_at'	
      ];
}
