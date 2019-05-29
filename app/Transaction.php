<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $fillable =['client_idno','payment_type_id','location_id','size_id','plotno','cost','paymentmode_id','date','amount','narration','reference'];
}
