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
    if(\Illuminate\Support\Facades\Auth::user()) return redirect()->route('dashboard');
    return view('pages.login.layout');
})->name('login');

Route::get('/kill', function () {
    Session::flush();
    Auth::logout();
    return view('login');
});


Route::get('logon', 'Auth\LoginController@redirectToProvider')->name('logon');
Route::get('logging', 'Auth\LoginController@handleProviderCallback'); 
