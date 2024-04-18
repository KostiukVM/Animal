<?php

namespace Tests\Feature;

use App\Models\ZooAnimal;
use App\Models\ZooEmployee;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AnimalTableTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     */
    public function test_animal_data(): void
    {
        $ZooAnimal = ZooAnimal::factory()->create();
        (
        new     ZooAnimal ([
           'animal_id'   => $ZooAnimal->id,
           'animal_name' => $ZooAnimal->name,
        ])
        )->save();
       //dd($ZooAnimal);
       // $this->assertFalse(false);
    }
}
