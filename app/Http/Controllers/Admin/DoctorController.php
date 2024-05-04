<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Doctor;
use App\Models\DoctorEducation;
use App\Http\Requests\DoctorRequest;
use App\Http\Requests\DoctorEducationRequest;

class DoctorController extends Controller
{
    public function index()
    {
        $doctors = Doctor::with('educations')->get();
        return view('admin.doctors.index', compact('doctors'));
    }

    public function create()
    {
        return view('admin.doctors.create');
    }

    public function store(DoctorRequest $request)
    {
        $doctor = Doctor::create($request->validated());

        foreach ($request->educations as $educationData) {
            $doctor->educations()->create($educationData);
        }

        return redirect()->route('admin.doctors.index');
    }

    public function edit(Doctor $doctor)
    {
        return view('admin.doctors.edit', compact('doctor'));
    }

    public function update(DoctorRequest $request, Doctor $doctor)
    {
        $doctor->update($request->validated());

        // Удаление старых записей об образовании
        $doctor->educations()->delete();

        // Создание новых записей об образовании
        foreach ($request->educations as $educationData) {
            $doctor->educations()->create($educationData);
        }

        return redirect()->route('admin.doctors.index');
    }

    public function destroy(Doctor $doctor)
    {
        $doctor->delete();
        return redirect()->route('admin.doctors.index');
    }
}
