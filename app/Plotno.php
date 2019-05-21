<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plotno extends Model
{
    protected $fillable = ['location_id','size_id','from_plotno','to_plotno','cost'];


public function location()
{
	return $this->belongsTo(Location::class);
}


    public function size()
    {
    	return $this->belongsTo(Size::class);
    }

}
