<?php

namespace Database\Factories;

use App\Models\ZooAnimal;
use App\Models\ZooAnimalFood;
use App\Models\ZooEmployee;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class ZooFactory extends Factory
{
    use HasFactory;
    protected $model = ZooAnimal::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->word,
        ];
    }

    public function configure()
    {
        return $this->afterCreating(function (ZooAnimal $animal) {
            $employee = ZooEmployee::factory()->create();
            $food = ZooAnimalFood::factory()->create();

            $employee->animals()->attach($animal);
            $animal->foodRecommendations()->attach($food);
        });
    }
}
