<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Collection;

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

    public function saveCollection(Request $request)
    {
    	//Store the image into the server in the correct path
    	$file = $request->file('image');
    	$destinationPath = public_path('/images');
    	$file->move($destinationPath, $file->getClientOriginalName());

    	//Create the collection object with the request info
    	$collection = new Collection;

    	$collection->fill(request(['name', 'brand', 'franchise']));
    	$collection->logoPath = $file->getClientOriginalName();
    	
    	//Save the collection item
    	$collection->save();

    	//Redirect to the desired location
    	return redirect()->action('AdminController@show');
    }

}
