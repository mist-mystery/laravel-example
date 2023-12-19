<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApitryController
{
  public function index()
  {
    return 'Controller index';
  }

  public function show(Request $request, string $id)
  {
    return response()->json(['id' => 1]);
  }
}
