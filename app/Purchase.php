<?php

namespace App;

use App\Facades\PurchaseConfirmationNumber;
use App\PurchaseConfirmationNumberGenerator;
use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    //
    protected $guarded = [];
    protected $dates = ['purchase_date'];

    public function passes()
    {
    	return $this->belongsToMany(\App\Pass::class,'purchase_items')->withTimestamps()->withPivot('qty','price');
    }
    public function items()
    {
    	return $this->hasMany(\App\PurchaseItem::class);
    }

    public function user()
    {
        return $this->belongsTo(\App\User::class);
    }

    // Attributes
    public function getTotalAttribute()
    {
    	return $this->items->sum('line_total');
    }

    public function getTotalInDollarsAttribute()
    {
        return $this->items->sum('line_total')/100;
    }

    /*
        Set a confirmation number when a purchase is created
     */
    public function setUserIdAttribute($value)
    {
        $this->attributes['user_id'] = $value;
        // Use a Facade to resolve the Purchase Confirmation Number Generator
        $this->attributes['confirmation_number'] = PurchaseConfirmationNumber::generate();
    }
}
