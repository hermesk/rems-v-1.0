<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaymentsReceiptsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments_receipts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('receiptno');
            $table->string('name');
            $table->string('mobile');
            $table->string('amount');
            $table->string('paymentmode_id');
            $table->string('paymentType');
            $table->string('narration');
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
        Schema::dropIfExists('payments_receipts');
    }
}
