<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvdetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invdetails', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('invno');
            $table->string('invdate');
            $table->string('itemname');
            $table->string('qty');
            $table->string('rate');
            $table->string('tax');
            $table->string('amt');
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
        Schema::dropIfExists('invdetails');
    }
}
