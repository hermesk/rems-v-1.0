<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $fillable =['receiptno','client_idno','payment_type_id','location_id','size_id','paymentmode_id','date','amount','narration','reference'];

   public function client(){

   	return $this->belongsTo('App\Client','client_id');
   }
   public function location(){

   	return $this->belongsTo(Location::class);
   }

   public function size(){

   	return $this->belongsTo(Size::class);
   }
   public function paymentType(){

   	return $this->belongsTo('App\PaymentType','payment_type_id');
   }

   public function mode(){
   	return $this->belongsTo('App\PaymentMode','paymentmode_id');
   }
}
