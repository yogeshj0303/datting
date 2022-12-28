<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvoiceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoice', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('cname');
            $table->string('invno');
            $table->string('invdate');
            $table->string('tot');
            $table->string('sgst');
            $table->string('cgst');
            $table->string('igst');
            $table->string('gtot');
            $table->string('discount');
            $table->string('adrs');
            $table->string('mblnmbr');
            $table->string('state');
            $table->string('hsnnmbr');
            $table->string('othercharges');
           
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('invoice');
    }
}
