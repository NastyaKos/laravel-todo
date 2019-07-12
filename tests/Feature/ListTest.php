<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ListTest extends TestCase
{
    public function testShowList()
    {
        $project = factory('App\Projects')->create();
        $response = $this->get('/project/'.$project->id);
        $response->assertJson([
            'id' => $project->id,
            'name' => $project->name
        ]);
        $project->delete();
    }

    public function testUpdateList()
    {
        $projectList = factory('App\ProjectList')->create([
            'project_id' => 0
        ]);
        $projectList->name = 'testUpdate';
        $projectList->save();

        $this->assertDatabaseHas('project_lists', [
            'name' => 'testUpdate'
        ]);

        $projectList->delete();
    }

    public function testStoreList()
    {
        $projectList = factory('App\ProjectList')->create([
            'project_id' => 0
        ]);

        $this->assertDatabaseHas('project_lists', [
            'id' => $projectList->id,
            'name' => $projectList->name
        ]);
        $projectList->delete();
    }

    public function testDeleteList()
    {
        $project = factory('App\Projects')->create();
        $projectList = factory('App\ProjectList')->create(['project_id'=>$project->id]);
        $projectList->delete();

        $this->assertDatabaseMissing('project_lists', [
            'id' => $projectList->id,
        ]);
        $projectList->delete();
        $project->delete();
    }
}
