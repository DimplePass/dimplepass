<?php

namespace App\Http\Controllers;

use App\Purchase;
use Illuminate\Http\Request;

class PurchaseController extends Controller
{
    //

	public function show($confirmationNumber)
	{
		$purchase = Purchase::where('confirmation_number',$confirmationNumber)->firstOrFail();
		return view('member.pass',['purchase' => $purchase]);
	}

	public function print($confirmationNumber)
	{
		$purchase = Purchase::where('confirmation_number',$confirmationNumber)->firstOrFail();
		return view('member.printpass',['purchase' => $purchase]);
	}
}
