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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/client', 'App\Http\Controllers\ClientController@index')->name('client.index');

Route::get('/bill', 'App\Http\Controllers\BillController@index')->name('bill.index');

Route::get('/appointment/site', 'App\Http\Controllers\PassportController@create')->name('passport.create');

// Route::post('/appointment/final', 'App\Http\Controllers\TemporaryController@create')->name('temporary.create');

// Route::post('/appointment/dateinformation', 'App\Http\Controllers\PassportController@dateapplication')->name('passport.dateapplication');

// Route::get('/final', 'App\Http\Controllers\FinalController@index')->name('final.index');