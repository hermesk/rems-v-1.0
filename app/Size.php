<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Size extends Model
{
    protected $fillable = ['location_id','name'];

    public function plotnos()
    {
    	return $this->hasMany(Plotno::class);
    }

     public function location()
    {
    	return $this->belongsTo(Location::class);
    }
}

