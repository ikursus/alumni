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

 Route::group(['prefix' => 'users', 'middleware' => 'auth'], function () {

    Route::get('/', 'UserController@index')->name('users.index');
    Route::get('/add', 'UserController@add')->name('users.add');
    Route::post('/add', 'UserController@save')->name('users.save');
    Route::get('/{id}', 'UserController@profile')->name('users.profile');
    Route::get('/{id}/edit', 'UserController@edit')->where(['id' => '[0-9]+'])->name('users.edit');
    Route::patch('/{id}/edit', 'UserController@update')->name('users.update');
    Route::delete('/{id}', 'UserController@destroy')->name('users.destroy');

 });

 Route::resource('religions', 'ReligionController');
 //->only(['index', 'create', 'store']);
 //->except(['index', 'create', 'store']);
 Route::resource('races', 'RaceController');
 // Route titles untuk terima ajax request dari page themes_title/index.blade.php
 Route::get('titles/datatables', 'TitleController@datatables')->name('titles.datatables');
 Route::resource('titles', 'TitleController');

 Route::get('print/users/{id}', 'PrintController@user')
 ->name('print.users');