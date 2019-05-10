<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $fillable =['idno','name','property','location','size','plotno','cost','paymentmode','date','amount','narration','reference'];
}
