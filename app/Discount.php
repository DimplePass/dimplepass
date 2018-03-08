<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Discount extends Model
{
    //
    protected $dates = ['start','end'];

    public function pass()
    {
    	return $this->belongsTo(\App\Pass::class);
    }

    public function vendor()
    {
    	return $this->belongsTo(\App\Vendor::class);
    }

    public function images()
    {
    	return $this->belongsToMany(\App\Image::class)->withTimestamps();
    }
}
