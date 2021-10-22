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

Route::get('/', function () {
    return view('welcome');
});

Route::get('dashboard', '\App\Http\Controllers\DashboardController@index');
Route::post('post-category-form', '\App\Http\Controllers\CategoryController@store');
Route::get('create-category', '\App\Http\Controllers\CategoryController@create');
Route::get('all-categories', '\App\Http\Controllers\CategoryController@index');
Route::get('edit-category/{id}', '\App\Http\Controllers\CategoryController@edit');
Route::post('update-category/{id}', '\App\Http\Controllers\CategoryController@update');
Route::get('delete-category/{id}', '\App\Http\Controllers\CategoryController@destroy');
Route::get('get-product-form', '\App\Http\Controllers\ProductController@create');
Route::post('post-product-form', '\App\Http\Controllers\ProductController@store');
Route::get('all-products', '\App\Http\Controllers\ProductController@index');
Route::get('edit-product/{id}', '\App\Http\Controllers\ProductController@edit');
Route::post('post-product-edit-form/{id}', '\App\Http\Controllers\ProductController@update');
Route::get('delete-product/{id}', '\App\Http\Controllers\ProductController@destroy');


Route::get('get-slider-form', '\App\Http\Controllers\SliderController@create');
Route::post('post-slider-form', '\App\Http\Controllers\SliderController@store');
Route::get('all-sliders', '\App\Http\Controllers\SliderController@index');
Route::get('edit-slider/{id}', '\App\Http\Controllers\SliderController@edit');
Route::post('post-slider-edit-form/{id}', '\App\Http\Controllers\SliderController@update');
Route::get('delete-slider/{id}', '\App\Http\Controllers\SliderController@destroy');