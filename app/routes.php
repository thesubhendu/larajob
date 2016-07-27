<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/','JobsController@index');
 Route::get('verify/{ccode}',['as'=>'verifyit','uses'=>'JobsController@confirm']);
Route::resource('jobs','JobsController');
Route::post('/search','JobsController@postSearch');
// Route::get('verify/{emailer}/{ccode}',function($uid,$ccode){
// 	return "Hellow".$ccode;
// });

