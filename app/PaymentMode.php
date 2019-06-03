<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PaymentMode extends Model
{
     protected $fillable = ['name'];

     public function payments(){
     	return $this->hasMany(Payment::class);
     }
     public function transactions(){
     	return $this->hasMany('App\Transaction');
     }
}
