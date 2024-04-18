<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class ZooAnimalFood extends Model
{
    public function animals():BelongsToMany
    {
        return $this->belongsToMany(ZooAnimal::class, 'food_recommendations', 'food_id', 'animal_id');
    }

    public function export(): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'animals' => $this->animals()->pluck('name')->toArray(),
        ];
    }
}
