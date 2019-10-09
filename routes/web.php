<?php

Route::get('/', 'MyController@index')->name('home-page');

Route::get('/category/{id}', 'MyController@showCategory')->name('categories');
Route::get('/post/{id}', 'MyController@showPost')->name('posts');

Route::get('/admin/post/create', 'MyController@create')->name('create.post');
Route::post('/admin/post/store', 'MyController@store')->name('store.post');

Route::get('/admin/post/edit/{id}', 'MyController@edit')->name('edit.post');
Route::post('/admin/post/update/{id}', 'MyController@update')->name('update.post');

Route::get('/admin/post/destroy/{id}', 'MyController@destroy')->name('destroy.post');
