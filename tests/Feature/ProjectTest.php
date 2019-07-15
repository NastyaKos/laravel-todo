<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ProjectTest extends TestCase
{
    public function testCheckMainPage()
    {
        $response = $this->get('/create-todo');

        $response->assertStatus(200);
    }

    public function testStoreProject()
    {
        $project = factory('App\Projects')->create();

        $this->assertDatabaseHas('projects', [
            'id' => $project->id,
            'name' => $project->name
        ]);
        $project->delete();
    }

    public function testShowAll()
    {
        $response = $this->get('/all-todo');
        $response->assertJson([
            'status' => 200
        ]);
    }
}
