<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Collection;
use App\Figure;
use App\User;
use App\Brand;
use App\Franchise;
use Auth;

class AdminController extends Controller
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

    public function addCollection()
    {
        $user = User::find(Auth::id());
        $brands = [0 => 'Select a brand'] + Brand::all()->pluck('name', 'id')->toArray();
        $franchises = [0 => 'Select a franchise'] + Franchise::all()->pluck('name', 'id')->toArray();

    	return view('admin.addCollection')->with(compact('user', 'brands', 'franchises'));
    }

    public function showCollections()
    {
        return 'show collections';
    }

    public function showFigures()
    {
        return 'show figres';
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

        $user = User::find(Auth::id());

    	return view('admin.addFigure')->with(compact('collections', 'user'));
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
