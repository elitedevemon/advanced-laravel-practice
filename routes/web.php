<?php

use App\Http\Controllers\AbortIfController;
use App\Http\Controllers\ForeachLoopController;
use App\Http\Controllers\TeacherController;
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

// foreach loop variable check
Route::get('loops', ForeachLoopController::class);

// javascript testing route
Route::view('js', 'js_testing');

// abort if function check
Route::get('/abort/{id}', AbortIfController::class);

//checking the multiple where condition into one where.
Route::get('where-condition', TeacherController::class);