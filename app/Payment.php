<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable = ['name','ptype','paymentmode','amount','reference','narration'];


    public function client(){

    	return $this->belongsTo(Client::class);
    }
     public function paymentType(){

    	return $this->belongsTo(PaymentType::class);
    }
}
