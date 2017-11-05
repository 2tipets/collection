<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

	/**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Shows the form with the user information
     */
    public function edit()
    {
    	$user = User::find(Auth::id());

    	return view('user.edit')->with(compact('user'));
    }
}
