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
    }

//    public function testUpdateList(){
//
//    }
}
