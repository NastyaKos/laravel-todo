<?php

namespace App\Http\Controllers;

use App\Projects;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function show()
    {
        return view('create-todo');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|unique:projects|max:15'
        ]);


        $project = new Projects();

        $project->name = $validatedData['name'];

        $project->save();

        return back();
    }
}
