<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('client_idno')->unsigned();
            $table->integer('payment_type_id')->unsigned();
            $table->integer('location_id')->unsigned();
            $table->integer('size_id')->unsigned();
            $table->string('plotno');
            $table->string('cost');
            $table->integer('paymentmode_id')->unsigned();
            $table->string('date');
            $table->string('amount');
            $table->string('reference');
            $table->string('narration');
            $table->string('created_by')->nullable();
            $table->string('deleted_by')->nullable();
            $table->foreign('client_idno')->references('idno')
            ->on('clients');
            $table->foreign('size_id')->references('id')
            ->on('sizes');
            $table->foreign('location_id')->references('id')
            ->on('locations');
            $table->foreign('paymentmode_id')->references('id')
            ->on('payment_modes');
            $table->foreign('payment_type_id')->references('id')
            ->on('payment_types');
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
        Schema::dropIfExists('transactions');
    }
}
