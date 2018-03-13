<?php

namespace App\Facades;

use App\PurchaseConfirmationNumberGenerator;
use Illuminate\Support\Facades\Facade;

/**
* 
*/
class PurchaseConfirmationNumber extends Facade
{
	
    protected static function getFacadeAccessor()
    {
        return PurchaseConfirmationNumberGenerator::class;
    }
}