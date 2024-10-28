<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ForeachLoopController extends Controller
{
  /**
   * Handle the incoming request.
   */
  public function __invoke(Request $request)
  {
    // foreach loop variable check
    $names = ['Emon', 'Hassan', 'Elitedev', 'Sagor', 'Iman', 'Belal', 'Pias', 'Muis', 'Naim', 'Neimar'];

    return view('foreach_loop_variables', compact('names'));
  }
}