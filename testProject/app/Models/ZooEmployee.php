<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ZooEmployee extends Model
{
    public function animals(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(ZooAnimal::class, 'caretakers', 'employee_id', 'animal_id');
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
