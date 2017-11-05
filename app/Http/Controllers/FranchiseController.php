<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Franchise;
use App\User;
use Auth;

class FranchiseController extends Controller
{
    
    public function __construct()
    {
    	$this->middleware('admin');
    }

    public function index()
    {
        $user = User::find(Auth::id());
        return view('admin.home')->with(['user' => $user]);
    }

    public function show()
    {
        $user = User::find(Auth::id());
    	return view('admin.home')->with(['user' => $user]);
    }

    public function create()
    {
        $user = User::find(Auth::id());
        return view('admin.addFranchise')->with(compact('user'));
    }

    public function store(Request $request)
    {
        //Create the new fracnhise with the form data
        Franchise::create([
                'name' => $request['name'],
                'foundation' => $request['foundation'],
                'creator' => $request['creator'],
                'description' => $request['description'],
            ]);

    	//Redirect to the desired location
    	return redirect()->action('AdminController@index');
    }

}
