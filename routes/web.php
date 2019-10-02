<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hubungi', function(){
    return view('template_hubungi');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/dashboard', function(){
    return view('template_dashboard');
});

/*
 * Halaman pengurusan user
 */

 Route::group(['prefix' => 'users'], function () {

    Route::get('/', 'UserController@index');
    Route::get('/add', 'UserController@add');
    Route::post('/add', 'UserController@save');
    Route::get('/{id}', 'UserController@profile');
    Route::get('/{id}/edit', 'UserController@edit')->where(['id' => '[0-9]+']);
    Route::patch('/{id}/edit', 'UserController@update');
    Route::delete('/', 'UserController@destroy');

 });

 Route::resource('academics', 'AkademikController');
 //->only(['index', 'create', 'store']);
 //->except(['index', 'create', 'store']);