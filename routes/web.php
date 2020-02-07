<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/search', 'SearchController@search')->name('search');

/*--------------------------------------------------------------
    User Routes
--------------------------------------------------------------*/
Route::prefix('user')->group(function() {
    /*--------------------------------------------------------------
        User profile
    --------------------------------------------------------------*/
    Route::get('/profile', 'UserController@showProfile')->name('profile'); //Works
    Route::get('/gopro', 'UserController@goPro')->name('gopro'); //Works
    Route::get('/gofree', 'UserController@goFree')->name('gofree'); //Works
    /*--------------------------------------------------------------
        Glossaries & terms
    --------------------------------------------------------------*/
    Route::prefix('glossary')->group(function() {
        Route::get('/new', 'GlossaryController@new')->name('new'); //Works
        Route::get('/edit/{id}', 'GlossaryController@edit')->name('edit'); //Works
        Route::get('/show/{id}', 'GlossaryController@show')->name('show'); //Works
        Route::post('/create', 'GlossaryController@create')->name('create'); //Works
        //Route::get('/update/{id}', 'GlossaryController@update')->name('update'); //
        //Route::get('/delete', 'GlossaryController@delete')->name('delete');
    });
    Route::get('/glossaries', 'GlossaryController@showMyGlossaries')->name('glossaries'); //Works
});