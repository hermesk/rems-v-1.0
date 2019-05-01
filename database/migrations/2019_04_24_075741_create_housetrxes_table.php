<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHousetrxesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('housetrxes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('idno');
            $table->string('name');
            $table->string('location');
            $table->string('size');
            $table->string('plotno');
            $table->string('cost');
            $table->string('paymentmode');
            $table->string('amount');
            $table->string('reference');
            $table->string('narration');
            $table->softDeletes();
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
        Schema::dropIfExists('housetrxes');
    }
}
