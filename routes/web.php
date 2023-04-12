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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/list', [App\Http\Controllers\ProductsController::class, 'showList'])->name('list');
Route::get('/regist',[App\Http\Controllers\ProductsController::class, 'showRegistForm'])->name('regist');
Route::post('/regist',[App\Http\Controllers\ProductsController::class, 'registSubmit'])->name('submit');