<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PaymentType extends Model
{
    protected $fillable = ['name','type'];


    public function transactions(){

    	return $this->hasMany(Transaction::class);
    }

    public function payments(){

    	return $this->hasMany(Payment::class);
    }
}
