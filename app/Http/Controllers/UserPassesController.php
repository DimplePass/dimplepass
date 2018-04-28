<?php

namespace App\Http\Controllers;

use App\Pass;
use App\User;
use Illuminate\Http\Request;
use PDF;

class UserPassesController extends Controller
{
    //
	public function show(User $user, Pass $pass)
	{
		// dd($user);
		// dd($pass);
		return view('member.pass',['pass' => $pass]);
	}

	public function print(User $user, Pass $pass)
	{
		// return $pass;
		// return view('member.printpass',['pass' => $pass]);
		$pdf = PDF::loadView('member.printpass', compact('pass'));
		return $pdf->stream('GoPass.pdf');
	}

}