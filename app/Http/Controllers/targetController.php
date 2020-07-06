<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Target;

class targetController extends Controller
{
    public function index() 
    {
      $target = Target::all()->sortByDesc('created_at');

      return view('target.index', ['target' => $target]);
    }
}
