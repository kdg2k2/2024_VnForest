<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'WebController@getHome');
Route::get('/van-ban', 'WebController@getVanban');

Route::get('/tin-tuc', 'WebController@getTintuc');
Route::get('/tin-tuc/{slug}', 'WebController@getXemtin');

Route::group(['prefix' => 'admin'/*, 'middleware' => 'isLogin'*/], function (){
    //user
    Route::group(['prefix' => 'user'], function (){
        Route::get('/', 'UserController@index');
        Route::get('/create', 'UserController@create');
        Route::post('/store', 'UserController@store');
        Route::get('/edit/{id}', 'UserController@edit');
        Route::patch('/update/{id}', 'UserController@update');
        Route::delete('/delete/{id}', 'UserController@destroy');
    });

    //lĩnh vực
    Route::group(['prefix' => 'linhvuc'], function (){
        Route::get('/', 'LinhVucController@index');
        Route::get('/create', 'LinhVucController@create');
        Route::post('/store', 'LinhVucController@store');
        Route::get('/edit/{id}', 'LinhVucController@edit');
        Route::patch('/update/{id}', 'LinhVucController@update');
        Route::delete('/delete/{id}', 'LinhVucController@destroy');
    });

    //loại văn bản
    Route::group(['prefix' => 'loaivb'], function (){
        Route::get('/', 'LoaiVanBanController@index');
        Route::get('/create', 'LoaiVanBanController@create');
        Route::post('/store', 'LoaiVanBanController@store');
        Route::get('/edit/{id}', 'LoaiVanBanController@edit');
        Route::patch('/update/{id}', 'LoaiVanBanController@update');
        Route::delete('/delete/{id}', 'LoaiVanBanController@destroy');
    });

    //văn bản
    Route::group(['prefix' => 'vanban'], function (){
        Route::get('/', 'VanBanController@index');
        Route::get('/create', 'VanBanController@create');
        Route::post('/store', 'VanBanController@store');
        Route::get('/edit/{id}', 'VanBanController@edit');
        Route::patch('/update/{id}', 'VanBanController@update');
        Route::delete('/delete/{id}', 'VanBanController@destroy');
    });

    //loại tin tức
    Route::group(['prefix' => 'loaitt'], function (){
        Route::get('/', 'LoaiTinTucController@index');
        Route::get('/create', 'LoaiTinTucController@create');
        Route::post('/store', 'LoaiTinTucController@store');
        Route::get('/edit/{id}', 'LoaiTinTucController@edit');
        Route::patch('/update/{id}', 'LoaiTinTucController@update');
        Route::delete('/delete/{id}', 'LoaiTinTucController@destroy');
    });

    //tin tức
    Route::group(['prefix' => 'tintuc'], function (){
        Route::get('/', 'TinTucController@index');
        Route::get('/create', 'TinTucController@create');
        Route::post('/store', 'TinTucController@store');
        Route::get('/edit/{id}', 'TinTucController@edit');
        Route::patch('/update/{id}', 'TinTucController@update');
        Route::delete('/delete/{id}', 'TinTucController@destroy');
    });
});