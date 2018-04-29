<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
    //Attributes

    public function getTownAttribute()
    {
    	return $this->city . ", " . $this->state;
    }

    // Relationships
    public function types()
    {
    	return $this->belongsToMany(\App\VendorType::class,'vendor_type');
    }
}
