<?php

namespace App\Http\Controllers;

use App\Http\Requests\targetRequest;
use Illuminate\Http\Request;
use App\Target;

class targetController extends Controller
{
    public function index() 
    {
      $target = Target::all()->sortByDesc('created_at');

      return view('target.index', ['target' => $target]);
    }

    public function store(targetRequest $request, target $target)
    {
      $target->fill($request->all());

      $target->save();

      return redirect()->route('target.index');
    }

    public function destroy(target $target)
    {
        $target->delete();
        return redirect()->route('target.index', ['target' => $target]);
    }
}
