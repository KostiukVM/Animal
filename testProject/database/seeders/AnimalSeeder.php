<?php

namespace Database\Seeders;

use App\Models\ZooAnimal;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AnimalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ZooAnimal::factory()->create();
    }
}
