<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PaymentMode extends Model
{
     protected $fillable = ['name'];

     public function transaction(){
     	return $this->belongsTo(Transaction::class);
     }
}
