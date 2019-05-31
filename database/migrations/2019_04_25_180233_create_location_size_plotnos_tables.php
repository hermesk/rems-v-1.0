<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLocationSizePlotnosTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('locations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('created_by')->nullable();
            $table->string('deleted_by')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
        Schema::create('sizes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            //$table->integer('location_id')->unsigned();
            $table->string('created_by')->nullable();
            $table->string('deleted_by')->nullable();
            // $table->foreign('location_id')->references('id')
            // ->on('locations');
            $table->softDeletes();          
            $table->timestamps();
        });
        Schema::create('plotnos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('location_id')->unsigned();
            $table->integer('size_id')->unsigned();
            $table->string('plotno');
            $table->string('cost'); 
            $table->integer('status')->nullable();
            $table->integer('client_id')->nullable()->unsigned();
            $table->string('created_by')->nullable();
            $table->string('deleted_by')->nullable();  
            $table->foreign('client_id')->references('idno')
            ->on('clients');
            $table->foreign('location_id')->references('id')
            ->on('locations');
            $table->foreign('size_id')->references('id')
            ->on('sizes');
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
        Schema::drop('location');
        Schema::drop('size');
        Schema::drop('plotnos');    }
}
