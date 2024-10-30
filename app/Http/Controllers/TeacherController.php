<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
  /**
   * Handle the incoming request.
   */
  public function __invoke(Request $request)
  {
    $teacher = Teacher::where(
      [
        ['age', '>', '20'],
        ['email', 'like', '%f%']
      ]
    )->get();

    return $teacher;
  }
}