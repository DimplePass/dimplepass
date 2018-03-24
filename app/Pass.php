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

    // Attributes
    public function getFormattedPriceInDollarsAttribute()
    {
        return money_format('%.2n',$this->price/100);
    }

    public function getPriceInDollarsAttribute()
    {
        return $this->price/100;
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

    public function purchases()
    {
        return $this->hasManyThrough(\App\Purchase::class,\App\PurchaseItem::class,'pass_id','id');
    }

    // Scopes
    public function scopeActive($query)
    {
        return $query->where('active',1);
    }
}
