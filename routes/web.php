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
    //return view('welcome');
   return view('auth/login');
});

/*Route::get('formView', function () {
    return view('users_form');
});*/

Route::get('/tableView', 'Register@index');
Route::get('/formView/', 'Register@formView');
Route::get('/formView/{id}', 'Register@formView');
Route::post('/formView', 'Register@formSubmit');
Route::get('/formView-delete/{id}', 'Register@delete');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
