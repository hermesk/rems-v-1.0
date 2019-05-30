<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransactionsReceiptsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions_receipts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('receiptno');
            $table->string('name');
            $table->string('type');
            $table->string('location');
            $table->string('size');
            $table->string('plotno');
            $table->string('cost');
            $table->string('amount');
            $table->string('mode');
            $table->string('date');
            $table->string('Narration');
            $table->string('amount_in_words');
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
        Schema::dropIfExists('transactions_receipts');
    }
}
