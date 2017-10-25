<?php

Route::get('/', function () {
    return view('index');
});

Route::get('/new', [
  'uses' => 'PagesController@new'
]);
