<?php

namespace App\Http\Controllers;

use App\Models\Todo;

class TodoController extends Controller
{
    public function index()

    {
        $tasks =  Todo::select('*')->get();
        return view('about', ['tasks' =>
                  $tasks]);
    }
}
