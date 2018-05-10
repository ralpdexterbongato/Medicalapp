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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/logout', 'Auth\LoginController@logout');
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/snvi', function() {
  return view('layouts.master');
});



Route::get('emp/add','EmployeController@create')->middleware('auth');
Route::get('emp/{id}','EmployeController@show')->middleware('auth');
Route::get('/getdata','EmployeController@index')->middleware('auth');
Route::get('/deletedata/{id}','EmployeController@destroy')->middleware('auth');
Route::get('/acc/{id}','EmployeAccController@index')->middleware('auth');
Route::get('/emp/acc/{id}','AccidentsTravailController@create')->middleware('auth');
Route::get('/emp/ante/{id}','AntecedentsPersoController@create')->middleware('auth');
Route::get('/emp/mal/{id}','MaladieController@create')->middleware('auth');
Route::get('/getvisite','VisiteController@index')->middleware('auth');
Route::get('/visite/add/{id}','VisiteController@create')->middleware('auth');
Route::get('/visite/addori/{id}','OrientationsController@create')->middleware('auth');
Route::get('/visite/addori/{id}','AptitudeAuTravailController@create')->middleware('auth');
Route::get('/visite/emp/{id}','VisiteController@showByEmp')->middleware('auth');
Route::get('/visite/{id}','VisiteController@show')->middleware('auth');
Route::get('/pdf/{id}','EmployeController@pdf');
Route::get('/emp/edit/{id}','EmployeController@edit')->middleware('auth');
Route::get('/visite/ori/pdf/{id}','VisiteController@pdf_ori');
Route::get('/visite/ap/pdf/{id}','VisiteController@pdf_ap');

Route::get('/visite/pdf/print','VisiteController@pdf_visite');
Route::get('/stats','EmployeController@stats');



Route::get('/emp', function(){
  return view('dm.index');
})->middleware('auth');

Route::get('/newvisite', function(){
  return view('visite.visitenew');
})->middleware('auth');
Route::get('/visite', function(){
  return view('visite.visite');
})->middleware('auth');

Route::post('/emp','EmployeController@store')->middleware('auth');
Route::put('/emp/{employe}','EmployeController@update')->middleware('auth');
Route::post('/emp/acc','AccidentsTravailController@store')->middleware('auth');
Route::post('/emp/ante','AntecedentsPersoController@store')->middleware('auth');
Route::post('/emp/mal','MaladieController@store')->middleware('auth');
Route::post('/visite/add','VisiteController@store')->middleware('auth');
Route::post('/visite/addori','OrientationsController@store')->middleware('auth');
Route::post('/visite/app','AptitudeAuTravailController@store')->middleware('auth');
