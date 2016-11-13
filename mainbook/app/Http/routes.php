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


Route::get('/', function () {
    return view('welcome');
});
 */


/*
Route::get('/', function(){
    return 'MAIN!';
});
 */

//Route::get('/', 'TestController@index');

//Route::get('/', ['uses' => 'TestController@index']);

//Route::get('/', ['uses' => 'TestController@index', 'as'=>'home']);

Route::get('/', ['uses' => 'TestController@index', 'as' => 'home']);
Route::get('message/{id}/edit', ['uses' => 'TestController@edit', 'as' => 'message.edit'])->where(['id' => '[0-9]+']);