<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable = ['name','ptype','paymentmode','amount','reference','narration'];


    public function paymentMode(){

    	return $this->belongsTo(PaymentMode::class,'paymentmode');
    }
     public function paymentType(){

    	return $this->belongsTo(PaymentType::class,'ptype');
    }
}
