<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plotno extends Model
{
    protected $fillable = ['location_id','size_id'];


	 // public function getStatusAttribte($attribute){
  //       return [
  //         0 => 'Available',
  //         1 => 'Taken'

  //       ][$attribute];
  //    }

    public function location()
	{
		return $this->belongsTo(Location::class);
	}


    public function size()
    {
    	return $this->belongsTo(Size::class);
    }
    public function client()
    {
    	return $this->belongsTo(Client::class);
    }
}
