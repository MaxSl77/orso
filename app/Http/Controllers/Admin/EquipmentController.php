<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\EquipmentsRequest;
use App\Models\Equipments;
use Illuminate\Http\Request;

class EquipmentController extends Controller
{
    public function index()
    {
        $equipments = Equipments::all();

        return view("admin.equipments.index", [
            "equipments" => $equipments
        ]);
    }

    public function create()
    {
        return view("admin.equipments.create", []);
    }

    public function store(EquipmentsRequest $request)
    {
        Equipments::create($request->validated());

        return redirect(route("admin.equipments.index"));
    }

    public function edit(Equipments $equipment)
    {
        return view("admin.equipments.create", [
            "equipment" => $equipment,
        ]);
    }

    public function update(EquipmentsRequest $request, Equipments $equipment)
    {
        $equipment->update($request->validated());

        return redirect(route("admin.equipments.index"));
    }

    public function destroy(Equipments $equipment)
    {
        $equipment->delete();
        return redirect(route("admin.equipments.index"));
    }
}
