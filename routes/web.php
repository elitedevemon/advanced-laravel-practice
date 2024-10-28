<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
  return view('welcome');
});

//optional parameter route
Route::get('post/{id?}', function (string $id = null) {
  if (!empty($id)) {
    return $id;
  }
  return "No id found";
});

//parameter type selection
Route::get('post/slug/{id?}', function (string $id = null) {
  if (!empty($id)) {
    return $id;
  }
  return "No id found";
})->whereAlpha('id');

Route::get('test', function () {
  return "this is about page";
});

Route::redirect("about", 'test');