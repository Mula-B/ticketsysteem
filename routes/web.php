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
    return view('auth.login');
});




//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/tickets', 'App\Http\Controllers\TicketController@index')->name('tickets.index');
Route::get('/tickets/read/{ticket}', 'App\Http\Controllers\TicketController@edit')->name('tickets.read');
Route::get('/tickets/create', 'App\Http\Controllers\TicketController@create')->name('tickets.create');
Route::post('/tickets/create', 'App\Http\Controllers\TicketController@store')->name('tickets.store');
Route::get('/tickets/{ticket}', 'App\Http\Controllers\TicketController@show')->name('tickets.show');
Route::post('/tickets/{ticket}', 'App\Http\Controllers\TicketController@update')->name('tickets.update');