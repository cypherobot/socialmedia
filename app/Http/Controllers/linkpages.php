<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class linkpages extends Controller
{
  public function userprofile()
  {
      return view('uprofile');
  }
}
