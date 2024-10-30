<?php

namespace App\Http\Controllers;

use App\Models\Name;
use Illuminate\Http\Request;

class AbortIfController extends Controller
{
  /**
   * Handle the incoming request.
   */
  public function __invoke(Request $request): mixed
  {
    // return $request->id;
    // abort if the file didn't find;
    $name = Name::get();
    abort_if(!$name, 404);
    return $name;
  }
}