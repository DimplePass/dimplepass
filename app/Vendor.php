<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
    //

    public function getTownAttribute()
    {
    	return $this->city . ", " . $this->state;
    }

}
