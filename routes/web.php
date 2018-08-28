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
});

Route::group(['prefix' => 'admin'], function () {
    Route::get('/', 'Admin\DashboardController@index')->name('admin.dashboard');
    // Route::post('/save', 'Admin\PoliController@save')->name('poli.save');
    // Route::post('/list', 'Admin\PoliController@list')->name('poli.list');
    // Route::delete('/delete', 'Admin\PoliController@delete')->name('poli.delete');
    // Route::put('/update', 'Admin\PoliController@update')->name('poli.update');
});
