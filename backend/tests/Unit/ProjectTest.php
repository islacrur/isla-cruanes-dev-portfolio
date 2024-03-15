<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Models\Project;

class ProjectTest extends TestCase
{
    /** 
     * @test
     */
    public function test_it_can_create_a_project(): void
    {
        $project = Project::create([
            'name' => 'Proyecto de prueba',
            'short_description' => 'Descripción corta del proyecto',
            'long_description' => 'Descripción larga del proyecto',
        ]);
        
        $this->assertInstanceOf(Project::class, $project);
        $this->assertEquals('Proyecto de prueba', $project->name);
        $this->assertEquals('Descripción corta del proyecto', $project->short_description);
        $this->assertEquals('Descripción larga del proyecto', $project->long_description);
    }

}
