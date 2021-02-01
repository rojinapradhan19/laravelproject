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

Route::post('/itemlist','FrontController@store')->name('itemlist');
Route::get('/itemlist','FrontController@index')->name('itemlist');
Route::get('items/delete/{id}','FrontController@destroy');
Route::get('items/update/{id}','FrontController@viewUpdate');
Route::post('/update','FrontController@update');
Route::post('/category','CategoryController@store');
Route::get('/category','CategoryController@index');



Route::get('/home', function () {
    return view('users/home');
});





//Route::post('/update','FrontController@update');
//Route::get('/items/delete','FrontController@destroy')->name('delete');

// Route::get('/itemlist','FrontController@insert')->name('itemlist');
// Route::get('/items/index','FrontController@index')->name('index');
//Route::get('/itemlist','FrontController@getAllItems')->name('itemlist');
//Route::post('/itemlist','ItemController@index');

