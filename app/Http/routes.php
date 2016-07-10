<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('/home', 'HomeController@index');

Route::get('/registrar-empresa', 'RegistrarController@index');

Route::group(['middleware' => 'auth'], function(){
    Route::group(['middleware' => 'cliente'], function(){
        //
    });
    Route::group(['middleware' => 'empleado', 'prefix' => 'empresa'], function(){
        //
    });
});
