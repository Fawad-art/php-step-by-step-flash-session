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

Route::get('/youtube/{id}', function ($id) {
    return view('youtube',["id"=>$id]);
   // return $id;
});

Route::redirect('/here', '/');

Route::get('users/{id}', 'UsersController@index');

Route::view('/mobiles', 'mobile');

Route::get('/req', 'RequestsController@index');

Route::view('/userform', 'form');
Route::post('/user', 'FormsController@submit');