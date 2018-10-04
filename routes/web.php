<?php

Route::group(['prefix'=>'/tasks'],function(){

    Route::get('/', 'TaskController@index')->name('index');
    Route::get('/create', 'TaskController@create');
    Route::get('/delete/{id}/', 'TaskController@delete')->name('delete');
    Route::get('/edit', 'TaskController@edit');

});
