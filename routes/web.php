<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin', 'AdminController@index');


Route::get('/admin/showcollections', 'AdminController@showCollections');
Route::get('/admin/addcollection', 'AdminController@addCollection');
Route::post('/admin/addcollection', 'AdminController@saveCollection');

Route::get('/admin/showfigures', 'AdminController@showFigures');
Route::get('/admin/addfigure', 'AdminController@addFigure');
Route::post('/admin/addfigure', 'AdminController@saveFigure');

Route::get('/admin/brand/create', 'BrandController@create');
Route::get('/admin/showBrands', 'BrandController@showBrands');
Route::post('/admin/brand/store', 'BrandController@store');

Route::get('/admin/franchise/create', 'FranchiseController@create');
Route::get('/admin/franchise/index', 'FranchiseController@index');
Route::post('/admin/franchise/store', 'FranchiseController@store');
/**
USER ROUTES
*/
Route::get('/user/edit', 'UserController@edit');


