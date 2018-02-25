<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pass extends Model
{
    //
    protected $dates = ['start','end'];
    protected $guarded = [];

    /**
     * Get the route key for the model.
     *
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function images()
    {
    	return $this->belongsToMany(\App\Image::class)->withTimestamps();
    }
    public function destinations()
    {
    	return $this->belongsToMany(\App\Destination::class)->withTimestamps();
    }

    public function discounts()
    {
    	return $this->hasMany(\App\Discount::class);
    }
}
