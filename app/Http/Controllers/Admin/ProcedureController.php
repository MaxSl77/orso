<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProcedureRequest;
use App\Models\Procedure;
use App\Models\ProcedureGroup;

class ProcedureController extends Controller
{
    public function index()
    {
        $procedures = Procedure::with('groups')->get()->all();
        return view('admin.procedures.index', compact('procedures'));
    }

    public function create()
    {
        $procedureGroups = ProcedureGroup::all();
        return view('admin.procedures.create', compact('procedureGroups'));
    }

    public function store(ProcedureRequest $request)
    {
        $validatedData = $request->validated();
        if(!$request->has('group_id')) {
            return back()->withErrors(['group_id' => 'Необходимо вырать группу'])->withInput();
        }
        $procedure = Procedure::create($validatedData);
        $groupIds = $request->input('group_id');
        $procedure->groups()->attach($groupIds);
        return redirect()->route('admin.procedures.index');
    }

    public function edit(Procedure $procedure)
    {
        $procedureGroups = ProcedureGroup::all();
        return view('admin.procedures.create', compact('procedure', 'procedureGroups'));
    }

    public function update(ProcedureRequest $request, Procedure $procedure)
    {
        $validatedData = $request->validated();
        if(!$request->has('group_id')) {
            return back()->withErrors(['group_id' => 'Необходимо вырать группу'])->withInput();
        }
        $procedure->update($validatedData);
        $procedure->groups()->sync($request->input('group_id'));
        return redirect()->route('admin.procedures.index');
    }

    public function destroy(Procedure $procedure)
    {
        $procedure->delete();
        return redirect()->route('admin.procedures.index');
    }
}
