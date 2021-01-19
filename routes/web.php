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

Route::get('/tentang', function () {
    return view('tentang');
});


Route::get('/', 'App\Http\Controllers\DashboardController@index')->name('dashboard');



Route::get('/api/server1', 'App\Http\Controllers\DashboardController@getDataServer1')->name('server1');
Route::get('/api/server2', 'App\Http\Controllers\DashboardController@getDataServer2')->name('server2');
Route::get('/api/lb1', 'App\Http\Controllers\DashboardController@getDataLB1')->name('lb1');
Route::get('/api/lb2', 'App\Http\Controllers\DashboardController@getDataLB2')->name('lb2');
Route::get('/api/all', 'App\Http\Controllers\DashboardController@getAll')->name('all');
// Route::get('/api/all', 'App\Http\Controllers\DashboardController@getAll')->name('all');
