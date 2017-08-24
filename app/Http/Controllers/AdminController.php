<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    
    public function __construct()
    {
    	$this->middleware('admin');
    }

    public function show()
    {
    	return view('admin.home');
    }

    public function addCollection()
    {
    	return view('admin.addCollection');
    }

    public function saveCollection()
    {
    	var_dump(request(['image']));
    	die();

    	//Store the image into the server in the correct path

    	//Create the collection object with the request info

    	//Save the collection item

    	//Redirect to the desired location
    }

}
