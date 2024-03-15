<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Models\Project;
//use App\Models\Technology;

class ProjectTest extends TestCase
{
    public function test_it_can_create_a_project(): void
    {
        $project = Project::create([
            'name' => 'Proyecto de prueba',
            'short_description' => 'Descripción corta del proyecto',
            'long_description' => 'Descripción larga del proyecto',
            'repo_link' => 'www.github.com',
            'demo_link' => 'www.github.com',
        ]);
        
        $this->assertInstanceOf(Project::class, $project);
        $this->assertEquals('Proyecto de prueba', $project->name);
        $this->assertEquals('Descripción corta del proyecto', $project->short_description);
        $this->assertEquals('Descripción larga del proyecto', $project->long_description);
        $this->assertEquals('www.github.com', $project->repo_link);
        $this->assertEquals('www.github.com', $project->demo_link);
    }

    // public function test_it_requires_name_and_short_description()
    // {
    //     $this->expectException(\Illuminate\Database\QueryException::class);

    //     Project::create([
    //         'name' => '',
    //         'short_description' => '',
    //         'long_description' => 'Descripción larga del proyecto',
    //     ]);
    // }
   
    // public function test_it_can_attach_technologies_to_project(): void
    // {
    //     $project = Project::factory()->create();
    //     $technology1 = Technology::factory()->create();
    //     $technology2 = Technology::factory()->create();

    //     $project->technologies()->attach([$technology1->id, $technology2->id]);

    //     $this->assertCount(2, $project->technologies);
    // }
}


