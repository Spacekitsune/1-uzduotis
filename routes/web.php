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

//Company
Route::prefix('companies')->group(function() {
    
    Route::get('','App\Http\Controllers\CompanyController@index')->name('companies.index');

    Route::get('create','App\Http\Controllers\CompanyController@create')->name('companies.create');

    Route::post('store','App\Http\Controllers\CompanyController@store')->name('company.store');

    Route::get('edit/{company}','App\Http\Controllers\CompanyController@edit')->name('companies.edit');

    Route::post('update/{company}','App\Http\Controllers\CompanyController@update')->name('company.update');

    Route::post('destroy/{company}','App\Http\Controllers\CompanyController@destroy')->name('company.destroy');

    Route::get('show/{company}','App\Http\Controllers\CompanyController@show')->name('companies.show');
    

});

Route::prefix('types')->group(function() {
    
    Route::get('','App\Http\Controllers\TypeController@index')->name('types.index');

    Route::get('create','App\Http\Controllers\TypeController@create')->name('types.create');

    Route::post('store','App\Http\Controllers\TypeController@store')->name('type.store');

    Route::get('edit/{type}','App\Http\Controllers\TypeController@edit')->name('types.edit');

    Route::post('update/{type}','App\Http\Controllers\TypeController@update')->name('type.update');

    Route::post('destroy/{type}','App\Http\Controllers\TypeController@destroy')->name('type.destroy');

    Route::get('show/{type}','App\Http\Controllers\TypeController@show')->name('types.show');
    

});