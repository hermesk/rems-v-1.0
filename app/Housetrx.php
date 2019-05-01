<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Housetrx extends Model
{
    //
    protected $fillable =['idno','name','location','size','plotno','cost','paymentmode','amount','narration','reference'
    ];


    // public function property()
    // {
    // 	return $this->belongsTo(Property::class);
    // }
}
