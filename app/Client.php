<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class client extends Model
{
    //
     protected $fillable = ['name','idno','mobile'];

     public function payments(){

     	return $this->hasMany(Payment::class);
     }
}
