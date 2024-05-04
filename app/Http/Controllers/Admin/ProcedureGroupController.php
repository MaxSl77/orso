<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProcedureGroupRequest;
use App\Models\ProcedureGroup;

class ProcedureGroupController extends Controller
{
    public function index()
    {
        $procedureGroups = ProcedureGroup::all();
        return view('admin.procedure-groups.index', compact('procedureGroups'));
    }

    public function create()
    {
        return view('admin.procedure-groups.create');
    }

    public function store(ProcedureGroupRequest $request)
    {
        ProcedureGroup::create($request->validated());
        return redirect(route("admin.procedure-groups.index"));
    }

    public function edit(ProcedureGroup $procedureGroup)
    {
        return view('admin.procedure-groups.create', compact('procedureGroup'));
    }

    public function update(ProcedureGroupRequest $request, ProcedureGroup $procedureGroup)
    {
        $procedureGroup->update($request->validated());
        return redirect()->route('admin.procedure-groups.index');
    }

    public function destroy(ProcedureGroup $procedureGroup)
    {
        $procedureGroup->delete();
        return redirect()->route('admin.procedure-groups.index');
    }
}
