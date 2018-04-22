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
Route::get('/',function(){
    return view('welcome');
});
Route::get('/home','ContactController@contact')->name('contact');
Route::post('/home','ContactController@sendcontact')->name('sendcontact');
Route::get('/thankyou',function (){
    return view('thankyou');
});


//Route::post('/contact','ContactController@sendcontact')->name('sendcontact');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
