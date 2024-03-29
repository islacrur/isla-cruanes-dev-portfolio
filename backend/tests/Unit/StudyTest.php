<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Models\Study;

class StudyTest extends TestCase
{
    public function test_it_can_create_a_study(): void
    {
        $study = Study::factory()->create([
            'course_name' => 'Curso de prueba',
            'institution_name' => 'Institución de prueba',
            'subjects' => ['Matemáticas', 'Física', 'Química'],
            'start_date' => now()->subYears(2),
            'end_date' => now()->subYear(),
        ]);

        $this->assertInstanceOf(Study::class, $study);
        $this->assertEquals('Curso de prueba', $study->course_name);
        $this->assertEquals('Institución de prueba', $study->institution_name);
        $this->assertEquals(['Matemáticas', 'Física', 'Química'], $study->subjects);
        $this->assertEquals(now()->subYears(2)->format('Y-m-d'), $study->start_date->format('Y-m-d'));
        $this->assertEquals(now()->subYear()->format('Y-m-d'), $study->end_date->format('Y-m-d'));
    }

    public function test_it_requires_course_name_and_institution_name(): void
    {
        $this->expectException(\Illuminate\Database\QueryException::class);

        Study::create([
            'course_name' => '',
            'institution_name' => '',
            'subjects' => ['Matemáticas', 'Física', 'Química'],
            'start_date' => now()->subYears(2),
            'end_date' => now()->subYear(),
        ]);
    }
    public function test_it_requires_start_and_end_date(): void
    {
        $this->expectException(\Illuminate\Database\QueryException::class);

        Study::create([
            'course_name' => 'Curso de prueba',
            'institution_name' => 'Institución de prueba',
            'subjects' => ['Matemáticas', 'Física', 'Química'],
            // 'start_date' and 'end_date' not provided intentionally
        ]);
    }

}