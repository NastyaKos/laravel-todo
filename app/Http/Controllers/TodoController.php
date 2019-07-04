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


        $project = new Projects();

        $project->name = $validatedData['name'];

        $project->save();

        return redirect('/all-todo');
    }

    public function showAll()
    {
        $projects = Projects::all();

        return view('all-todo', ['projects' => $projects]);
    }

    public function showList($id)
    {
        $project = Projects::find($id);
        return view('project', ['project' => $project]);
    }

    public function updateList(Request $request, $id)
    {
        $list = ProjectList::find($id);
        $list->done=$request->input('done');
        $list->save();
        return back();
    }

    public function storeList(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|unique:projects|max:100'
        ]);
        $list = new ProjectList();
        $list->name =  $validatedData['name'];
        $list->done =0;
        $list->project_id =$request->input('project_id') ;
        $list->save();
        return back();

    }
    public function deleteList(Request $request, $id)
    {

        $list = ProjectList::find($id);
        $list->delete();
        $delList=$request->input('project_id');
        return redirect('/project/'.$delList);

    }
}
