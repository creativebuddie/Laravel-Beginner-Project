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
/*Admin Routes*/
Route::get('/admin', 'adminContoller@admin');
Route::get('adminUsers/create', 'adminContoller@create');
Route::post('adminUsers/store', 'adminContoller@store');
Route::get('adminUsers/show', 'adminContoller@show');
Route::get('adminUsers/edit/{id}', 'adminContoller@edit');
Route::post('adminUsers/update/{id}', 'adminContoller@update');
Route::get('adminUsers/destroy/{id}', 'adminContoller@destroy');
/*Category Routes*/
Route::get('adminCategory/create', 'categoryController@create');
Route::post('adminCategory/store', 'categoryController@store');
Route::get('adminCategory/show', 'categoryController@show');
Route::get('adminCategory/edit/{id}', 'categoryController@edit');
Route::post('adminCategory/update/{id}', 'categoryController@update');
Route::get('adminCategory/destroy/{id}', 'categoryController@destroy');
/*Product Routes*/
Route::get('adminProduct/create', 'productController@create');
Route::post('adminProduct/store', 'productController@store');
Route::get('adminProduct/show', 'productController@show');

Route::get('adminProduct/destroy/{id}', 'productController@destroy');
