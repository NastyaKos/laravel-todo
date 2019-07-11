<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ProjectTest extends TestCase
{
    /** @test */
    public function check_main_page()
    {
        $response = $this->get('/create-todo');

        $response->assertStatus(200);
    }

    /** @test */
    public function store_project()
    {
        $project = factory('App\Projects')->create();

        $this->assertDatabaseHas('projects', [
            'id' => $project->id,
            'name' => $project->name
        ]);
    }

    /** @test */
    public function test_showAll()
    {
        $response = $this->get('/all-todo');
        $response->assertJson([
            'status' => 200
        ]);
    }
}
