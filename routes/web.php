<?php

Route::get('/', function () {
    return view('index');
});

Route::get('/new', [
  'uses' => 'PagesController@new'
]);

Route::get('/todos', [
  'uses' => 'TodosController@index'
]);

Route::post('/create/todos', [
  'uses' => 'TodosController@store'
]);

Route::get('todo/delete/{id}', [
  'uses' => 'TodosController@delete',
  'as'   => 'todo.delete'
]);
