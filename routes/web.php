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
    return view('post');
});

Route::get('/index', function () {
    return view('test');
});

Route::get('/mail', function() {
    Mail::to('pnaveencs@gmail.com')->send(new \App\Mail\SendDonationAmountMail());
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
