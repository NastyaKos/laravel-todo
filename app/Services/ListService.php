<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 08.07.19
 * Time: 14:56
 */

namespace App\Services;


use App\ProjectList;
use Illuminate\Http\Request;

class ListService
{
    public function setList($projectList, $validatedData, $request)
    {
        $projectList->name = $validatedData['name'];
        $projectList->done = 0;
        $projectList->project_id = $request->input('project_id') ;
        $projectList->save();
    }

    public function delList($request, $id)
    {
        $list = ProjectList::find($id);
        $list->delete();
        $delList = $request->input('project_id');
        return $delList;
    }
}