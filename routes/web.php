<?php

use Illuminate\Support\Facades\Route;

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
    return redirect()->route('login');
});

Route::group(['middleware' => ['auth']], function () {
    Route::get('/home', 'LoginController@index' ,function () {
        return view('pages.home');
    })->name('home');
    Route::get('/logout', 'LoginController@logout')->name('logout');
});

Route::get('/login', 'LoginController@verificationAuthentication')->name('login_pages');
Route::post('/login', 'LoginController@authenticate')->name('login');

Route::post('/cadastrar', 'LoginController@store')->name('cadastrar');

