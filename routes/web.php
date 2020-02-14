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

use App\Http\Controllers\UserController;

Route::get('/' , function(){ 
        return view('home', [
            'title' => 'Ahlsell',
            'information' => 'information bla bla',
            'address' => 'mölndal',
            'year' => '2019',
        ]);
}); 

Route::post('login', [UserController::class, 'login']);

Auth::routes();
