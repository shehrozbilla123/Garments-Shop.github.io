<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/', 'FrontendController@index');
Route::get('/Contact-us', 'FrontendController@Contact');
Route::get('/shop', 'FrontendController@shop');
Route::get('/blog', 'FrontendController@blog');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


/*Admin Routes*/
Route::namespace('admin')->middleware('auth:admin')
    ->prefix('/admin')->group(function () {
    Route::get('/category/create', 'CategoryController@create');
    Route::post('/category/create', 'CategoryController@store');
    Route::get('/category/index', 'CategoryController@index');
    Route::get('/category/{category}', 'CategoryController@show');


    Route::get('/brand/create', 'BrandController@create');
    Route::post('/brand/create', 'BrandController@store');
    Route::get('/brand/index', 'BrandController@index');
    Route::get('/brand/{brand}', 'BrandController@show');


    Route::get('/product/index', 'ProductController@index');
    Route::get('/product/create', 'ProductController@create');
    Route::post('/product/create', 'ProductController@store');
    Route::get('/product/{product}', 'ProductController@show');
    Route::get('/product/{product}/edit', 'ProductController@edit');
    Route::patch('/product/{product}', 'ProductController@update');
    Route::delete('/product/{product}', 'ProductController@destroy');

});

