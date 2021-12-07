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
    return view('template.home');
//    return view('welcome');
});

Auth::routes();

Route::get('/dashboard', 'HomeController@index')->name('home');

Route::get('/oque-sou', function (){
    return view('auth.select');
})->name('select');

Route::get('/register-dev', function (){
    return view('auth.registerdev');
})->name('register.dev');

Route::group(['middleware' =>  'auth'], function () {

});