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

Route::get('/', 'MenuController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/inscripciones-finalizadas', 'MenuController@completo')->name('completo');

Route::get('user-list-excel', 'MenuController@exportExcel')->name('users.excel');
Route::post('import-list-excel', 'MenuController@importExcel')->name('users.import.excel');

