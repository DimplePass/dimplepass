<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    //
    protected $guarded = [];

    public function pass()
    {
    	return $this->belongsToMany(\App\Pass::class,'purchase_items')->withTimestamps()->withPivot('qty','price');
    }
    public function items()
    {
    	return $this->hasMany(\App\PurchaseItem::class);
    }

    // Attributes
    public function getTotalAttribute()
    {
    	return $this->items->sum('line_total');
    }
}
