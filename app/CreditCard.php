<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CreditCard extends Model
{
    protected $guarded = [];

    // Relations
    public function user()
    {
    	return $this->belongsTo(\App\User::class);
    }
}
