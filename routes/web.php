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

Route::get('/home', 'App\Http\Controllers\IndexController@index');
Route::get('/history', 'App\Http\Controllers\HistoryController@index');
Route::get('/transaction', 'App\Http\Controllers\TransactionController@index');
Route::get('/inventory', 'App\Http\Controllers\InventoryController@index');
