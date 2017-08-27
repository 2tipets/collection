<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Collection;
use App\Figure;

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

    public function addFigure()
    {
    	$collections = Collection::all()->pluck('name', 'id')->toArray();
    	$collections[0] = 'Choose a collection from the list';
    	asort($collections);

    	return view('admin.addFigure')->with(compact('collections'));
    }

    public function saveFigure(Request $request)
    {
    	//store the image into the correct path
    	$file = $request->file('image');
    	$destinationPath = public_path('/images');
    	$file->move($destinationPath, $file->getClientOriginalName());

    	//Create the figure object with the form info
    	$figure = new Figure;
    	$figure->fill(request(['name', 'year', 'collection_id', 'size', 'barcode']));
    	$figure->picture = $file->getClientOriginalName();
    	
    	//save the figure object
    	$figure->save();

    	//redirect to the home admin page 
    	return redirect()->action('AdminController@show');
    }

}
