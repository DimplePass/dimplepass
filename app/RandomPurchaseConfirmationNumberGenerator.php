<?php

namespace App;

use App\PurchaseConfirmationNumberGenerator;

/**
* 
*/
class RandomPurchaseConfirmationNumberGenerator implements PurchaseConfirmationNumberGenerator
{
	
	public function generate()
	{
	    // Must be 24 characters long
	    // Can only contain uppercase letters and numbers
	    // Cannot contain ambiguous characters
	    // All order confirmation numbers must be unique
	    //
	    // ABCDEFGHJKLMNPQRSTUVWXYZ
	    // 23456789

        $pool = 'ABCDEFGHJKLMNPQRSTUVWXYZ23456789';
        return substr(str_shuffle(str_repeat($pool, 24)), 0, 24);
	}
}