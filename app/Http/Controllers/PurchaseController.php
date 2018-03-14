<?php

namespace App\Http\Controllers;

use App\Purchase;
use Illuminate\Http\Request;

class PurchaseController extends Controller
{
    //

	public function show($confirmationNumber)
	{
		return Purchase::where('confirmation_number',$confirmationNumber)->first();
	}
}
