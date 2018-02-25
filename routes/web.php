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

Route::get('/', 'PasteController@showIndex');
Route::get('/{paste}', 'PasteController@showPaste');
Route::get('/{paste}/raw', 'PasteController@showRawPaste');

Route::post('/new', 'PasteController@createPaste');
