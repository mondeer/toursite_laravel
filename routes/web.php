<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/county/gallery', function() {
  return view('gallery');
});

Route::get('/client/success', function() {
  return view('client.success');
});

Auth::routes();

Route::get('/client/book', 'BookController@Create');

Route::post('/client/book', 'BookController@postCreate');

Route::get('/home', 'BookController@viewBookings');

Route::resource('/defer', 'DeferCtrl');

Route::get('deferred', 'DeferCtrl@deferred');
