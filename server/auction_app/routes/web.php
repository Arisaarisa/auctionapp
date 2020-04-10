<?php

use App\Http\Controllers\ItemsController;
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

Route::get('/items','ItemsController@index');
Route::post('/items/new','ItemsController@create');
Route::get('/items/{id}','ItemsController@new');
Route::get('/items/{id}/edit','ItemsController@show');
Route::get('/items/{id}/edit','ItemsController@edit');
Route::patch('/items/{id}','ItemsController@update');
Route::delete('/items/{id}','ItemsController@destroy');