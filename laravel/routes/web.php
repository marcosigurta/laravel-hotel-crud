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

Route::get('/', 'StanzeController@index') -> name('stanze-index');
Route::get('/show/{id}', 'StanzeController@show') -> name('stanza-show');
Route::post('/create', 'StanzeController@store')-> name('stanza-create');





