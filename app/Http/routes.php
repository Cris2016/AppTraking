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
    if(Auth::guest()){
        return redirect('/login');
    }else{
        return redirect('/home');
    }
});

Route::auth();

Route::get('/home', 'HomeController@index');

Route::get('/registrar-empresa', 'RegistrarController@index');

Route::group(['middleware' => 'auth'], function(){
    Route::get('/servicios/{id}', ['as'=>'servicios.ver', 'uses'=>'ClienteController@verServicio']);
    Route::group(['middleware' => 'cliente'], function(){
        //
    });
    Route::group(['middleware' => 'empleado', 'prefix' => 'empresa'], function(){
        //
    });
});

Route::get('/quienesSomos', function () {
    return view('quienesSomos');
});

Route::get('/empresas','PublicController@empresas');
