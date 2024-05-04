<?php

namespace App\Http\Controllers;

use App\Models\ProcedureGroup;
use Illuminate\Http\Request;

class ProcedureController extends Controller
{
    public function index()
    {
        $procedureGroups = ProcedureGroup::with('procedures')->get()->groupBy('name');

        return view('welcome', compact('procedureGroups'));
    }
}
