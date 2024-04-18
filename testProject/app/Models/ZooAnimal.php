<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ZooAnimal extends Model
{

    public function caretakers(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(ZooEmployee::class, 'caretakers', 'animal_id', 'employee_id');
    }

    public function foodRecommendations(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(ZooAnimalFood::class, 'food_recommendations', 'animal_id', 'food_id');
    }

    public function export(): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'caretakers' => $this->caretakers()->pluck('name')->toArray(),
            'food_recommendations' => $this->foodRecommendations()->pluck('name')->toArray(),
        ];
    }
}
