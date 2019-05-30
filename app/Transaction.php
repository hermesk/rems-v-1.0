<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $fillable =['receiptno','client_idno','payment_type_id','location_id','size_id','paymentmode_id','date','amount','narration','reference'];

   public function client(){

   	return $this->belongsTo(Client::class);
   }
   public function location(){

   	return $this->belongsTo(Location::class);
   }

   public function size(){

   	return $this->belongsTo(Size::class);
   }
   public function type(){

   	return $this->belongsTo(PaymentType::class);
   }

   public function modes(){
   	return $this->hasMany(PaymentMode::class);
   }
}
