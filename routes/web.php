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


//Client
Route::prefix('clients')->group(function() {
    // čia yra client pagr psl
    Route::get('','App\Http\Controllers\ClientController@index')->name('clients.index');

    //čia yra naujo kliento lentelė
    Route::get('create','App\Http\Controllers\ClientController@create')->name('clients.create');

    

    //čia duomenys yra įkeliami į db (neturi vaizdo, tik f-cija)
    Route::post('store','App\Http\Controllers\ClientController@store')->name('client.store');

    Route::get('edit/{client}','App\Http\Controllers\ClientController@edit')->name('clients.edit');

    Route::post('update/{client}','App\Http\Controllers\ClientController@update')->name('client.update');

    Route::post('destroy/{client}','App\Http\Controllers\ClientController@destroy')->name('client.destroy');

    Route::get('show/{client}','App\Http\Controllers\ClientController@show')->name('clients.show');
    

});