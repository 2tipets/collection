<?php

namespace App\Http\Controllers;

use App\Brand;
use Illuminate\Http\Request;
use App\User;
use Auth;
use App\Controllers\Auth\AdminController;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = User::find(Auth::id());
        return view('admin.addBrand')->with(compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Create the brand object with the request info
        $brand = new Brand;
        $brand->fill(request(['name', 'foundation', 'country', 'catchword', 'description', 'website']));

        //Store the image into the server in the correct path
        $file = $request->file('image');
        $destinationPath = public_path('/images/brands/' . $brand->id .'/' . $file->getClientOriginalName());
        $file->move($destinationPath, $file->getClientOriginalName());
        
        $brand->imagePath = $file->getClientOriginalName();
        
        //Save the brand item
        $brand->save();

        //Redirect to the desired location
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function show(Brand $brand)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function edit(Brand $brand)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Brand $brand)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function destroy(Brand $brand)
    {
        //
    }

    public function showBrands()
    {

    }
}
