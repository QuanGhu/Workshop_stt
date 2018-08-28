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

Route::get('/admin','Admin\DashboardController@index')->name('dashboard');
Route::get('/category','Admin\CategoryController@index')->name('category');
Route::post('/category/save','Admin\CategoryController@save')->name('save.category');
Route::get('/category/delete/{id}','Admin\CategoryController@delete')->name('delete.category');
// Route::group(['prefix' => 'admin'], function () {
//     Route::get('/', 'Admin\DashboardController@index')->name('admin.dashboard');
//     // Route::post('/save', 'Admin\PoliController@save')->name('poli.save');
//     // Route::post('/list', 'Admin\PoliController@list')->name('poli.list');
//     // Route::delete('/delete', 'Admin\PoliController@delete')->name('poli.delete');
//     // Route::put('/update', 'Admin\PoliController@update')->name('poli.update');
// });
