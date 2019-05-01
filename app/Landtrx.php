<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Landtrx extends Model
{
    protected $fillable =['idno','name','location','size','plotno','cost','paymentmode','amount','narration','reference'];
}
