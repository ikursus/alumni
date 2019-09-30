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

        $senaraiUsers = [
            ['id' => '1', 'name' => 'Ali Bin Abu', 'email' => 'ali@abu.com', 'phone' => '0123465897'],
            ['id' => '2', 'name' => 'Ahmad Bin Abu', 'email' => 'ahmad@abu.com', 'phone' => '0123465833'],
            ['id' => '3', 'name' => 'Siti Nurhaliza', 'email' => 'siti@nurhaliza.com', 'phone' => '0123665897'],
            ['id' => '4', 'name' => 'John Doe', 'email' => 'john@doe.com', 'phone' => '0123465877'],
            ['id' => '5', 'name' => 'Upin Ipin', 'email' => 'upin@ipin.com', 'phone' => '0123465899']
        ];

        return view('theme_user.template_index', compact('senaraiUsers'));
    });
    
    Route::get('/add', function () {
        return view('theme_user.template_add');
    });
    
    Route::post('/add', function () {
        return 'Data telah berjaya diterima';
    });
    
    Route::get('/{username}', function ($username) {
        return view('theme_user.template_profile', compact('username'));
    });
    
    Route::get('/{id}/edit', function ($id) {
        $page_title = 'Edit User';
        // return view('theme_user.template_edit');
        // return view('theme_user.template_edit', ['id' => $id]);
        // return view('theme_user.template_edit')->with('id', $id);
        return view('theme_user.template_edit', 
        compact('page_title','id'));

    })->where(['id' => '[0-9]+']);
    
    Route::patch('/', function () {
        return 'Kemaskini data telah berjaya diterima';
    });

 });