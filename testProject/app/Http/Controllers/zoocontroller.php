<?php

namespace App\Http\Controllers;

use App\Models\ZooAnimal;
use App\Models\ZooEmployee;
use Illuminate\Http\Request;

class zoocontroller extends Controller
{
    public function showAnimal($id): \Illuminate\Http\JsonResponse
    {
        $animal = ZooAnimal::find($id);
        $data = $animal->getData();
        return response()->json($data);
    }

    public function showEmployee($id): \Illuminate\Http\JsonResponse
    {
        $employee = ZooEmployee::find($id);
        $data = $employee->getData();
        return response()->json($data);
    }
}
