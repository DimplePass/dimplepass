<?php

namespace App\Http\Controllers;

use App\Pass;
use App\User;
use Illuminate\Http\Request;

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
		return view('member.printpass',['pass' => $pass]);
	}

}
