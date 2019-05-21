<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    protected $fillable = ['name'];


    public function plotnos()
    {
    	return $this->hasMany(Plotno::class);

    }

    public function sizes()
    {
    	return $this->hasMany(Size::class);

    }

}
