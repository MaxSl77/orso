<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\GroupProcedureRequest;
use App\Models\GroupProcedure;

class GroupProcedureController extends Controller
{
    public function index()
    {
        $groupProcedures = GroupProcedure::all();
        return view('admin.group_procedures.index', compact('groupProcedures'));
    }

    public function create()
    {
        return view('admin.group_procedures.create');
    }

    public function store(GroupProcedureRequest $request)
    {
        GroupProcedure::create($request->validated());
        return redirect()->route('admin.group_procedures.index');
    }

    public function edit(GroupProcedure $groupProcedure)
    {
        return view('admin.group_procedures.create', compact('groupProcedure'));
    }

    public function update(GroupProcedureRequest $request, GroupProcedure $groupProcedure)
    {
        $groupProcedure->update($request->validated());
        return redirect()->route('admin.group_procedures.index');
    }

    public function destroy(GroupProcedure $groupProcedure)
    {
        $groupProcedure->delete();
        return redirect()->route('admin.group_procedures.index');
    }
}
