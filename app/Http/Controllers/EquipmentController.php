<?php

namespace App\Http\Controllers;

use App\Models\Equipments;
use Illuminate\Http\Request;

class EquipmentController extends Controller
{
    public function index()
    {
        $equipments = Equipments::all();

        return view('equipment', [
            "equipments" => $equipments,
        ]);
    }
}
