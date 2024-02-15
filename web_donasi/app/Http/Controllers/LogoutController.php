<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LogoutController extends Controller
{
	public function index(Request $request): RedirectResponse
	{
		
		Auth::logout();

		$request->session()->invalidate();
		$request->session()->regenerateToken();

		return redirect('/login');
	}
}
