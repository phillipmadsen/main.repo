<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class AdminController extends Controller
{
	public function __construct()
	{

		$user = User::all();

		// Sharing is caring
		View::share('user', $user);
	}
}
