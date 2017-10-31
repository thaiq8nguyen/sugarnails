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
})->name('welcome');

Route::get('/services','SalonServiceController@index')->name('services');

Route::get('/about','AboutSalonController@index')->name('about');

Route::get('/signage','DigitalSignageController@index')->name('signage');

Route::get('/signage/feedback', 'DigitalSignageController@feedback')->name('feedback');

Route::get('/signage/thanksgiving', 'DigitalSignageController@thanksgiving')->name('thanksgiving');

Route::get('/passport', function(){
    return view('auth.passport');
})->middleware('auth');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
