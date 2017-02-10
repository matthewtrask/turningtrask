<?php

Auth::routes();

Route::get('/', ['uses' => 'Wedding\WeddingController@index']);
Route::get('/story', ['uses' => 'Wedding\StoryController@index']);
Route::get('/wedding-party', ['uses' => 'Wedding\WeddingPartyController@index']);
Route::get('/charleston', ['uses' => 'Wedding\CharlestonController@index']);
Route::get('/registry', ['uses' => 'Wedding\RegistryController@index']);
Route::get('/contact', ['uses' => 'Wedding\ContactController@index']);

Route::post('/contact', ['uses' => 'Wedding\ContactController@send']);

Route::get('/party', ['uses' => 'Wedding\WeddingPartyController@party']);


Route::get('/admin', ['uses' => 'Admin\AdminController@index']);
Route::post('/admin/about', ['uses' => 'Admin\AdminController@about']);