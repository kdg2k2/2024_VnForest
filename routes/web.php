<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'WebController@getHome');
Route::get('/van-ban', 'WebController@getVanban');

Route::get('/tin-tuc', 'WebController@getTintuc');
Route::get('/tin-tuc/1', 'WebController@getXemtin');