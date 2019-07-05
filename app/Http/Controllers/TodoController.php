<?php

namespace App\Http\Controllers;

use App\ProjectList;
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
        Projects::create([
            'name' => $validatedData['name']
        ]);
//        return response()->json([
//            'status' => 200,
//            'massage' => 'campaign created'
//
//            ]);
       return redirect('/all-todo');
    }

    public function showAll()
    {
        $projects = Projects::all();

//        return response()->json([
//            'status' => 200,
//            'projects' => $projects
//        ]);
        return view('all-todo', ['projects' => $projects]);
    }


    public function showList($id)
    {
        $project = Projects::find($id);

//        return response()->json([
//            'id' => $project->id,
//            'name' => $project->name
//        ]);
        return view('project', ['project' => $project]);
    }

    public function updateList(Request $request, $id)
    {
        $list = ProjectList::find($id);
        $list -> done = $request -> input('done');
        $list -> save();
        return back();
    }

    public function storeList(ProjectList $projectList, Request $request)
    {
        $validatedData = $request -> validate([
            'name' => 'required|unique:projects|max:15'
        ]);

        $projectList -> name = $validatedData['name'];
        $projectList -> done = 0;
        $projectList -> project_id = $request -> input('project_id') ;
        $projectList -> save();
        return back();

    }
    public function deleteList(Request $request, $id)
    {

        $list = ProjectList::find($id);
        $list -> delete();
        $delList = $request -> input('project_id');
        return redirect('/project/' . $delList);

    }
}
