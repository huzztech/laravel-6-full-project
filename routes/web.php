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


//Auth::routes();
Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');


Route::get('verify/{email}/{token}', 'Auth\RegisterController@verifyemail')->name('verify');


//Route::get('/', 'HomeInvoiceController@index');

/*Route::get('/', function () {
	
	    return view('welcome');
});*/

Route::get('/', function () {
    return redirect(route('login'));
});

/*******Profile************/

Route::get('home/profile', 'UserController@show');
Route::get('home/profile/edit', 'UserController@edit');
Route::post('home/profile/edit', 'UserController@update');


/*******Program************/

Route::get('home/program/add', 'ProgramController@show');
Route::post('home/program/add', 'ProgramController@store');
Route::get('home/program/view', 'ProgramController@view');
Route::get('home/program/edit/{id}', 'ProgramController@edit');
Route::post('home/program/update', 'ProgramController@update');
Route::get('home/program/single/{id}', 'ProgramController@program_detail');
Route::get('home/program/cancel/{id}', 'ProgramController@cancel');
Route::get('home/program/multiple/{id}', 'ProgramController@program_multiple');
Route::post('home/program/multiple/destroy', 'ProgramController@destroy')->name('ajaxdata.postdata');
Route::get('home/program/search/', 'ProgramController@search');

