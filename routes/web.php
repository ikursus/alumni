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

    Route::get('/', function () {
        return view('theme_user.template_index');
    });
    
    Route::get('/add', function () {
        return view('theme_user.template_add');
    });
    
    Route::post('/add', function () {
        return 'Data telah berjaya diterima';
    });
    
    Route::get('/{username}', function ($username) {
        return view('theme_user.template_profile');
    });
    
    Route::get('/{id}/edit', function ($id) {
        return view('theme_user.template_edit');
    })->where(['id' => '[0-9]+']);
    
    Route::patch('/', function () {
        return 'Kemaskini data telah berjaya diterima';
    });

 });