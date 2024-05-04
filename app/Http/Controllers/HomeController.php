<?php

namespace App\Http\Controllers;

use App\Models\Home;
use App\Models\Procedure;
use App\Models\ProcedureGroup;
use App\Models\Sales;
use App\Models\Stuff;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $sales = Sales::all();
        $procedureGroups = ProcedureGroup::with('procedures')->get();
        $procedures = Procedure::all();

        return view('welcome', [
            "sales" => $sales,
            "procedureGroups" => $procedureGroups,
            "procedures" => $procedures,
        ]);
    }

    public function stuff ()
    {
        return view('stuff');
    }

    public function zhanna()
    {
        return view('zhanna');
    }

    public function mikhail()
    {
        return view('mikhail');
    }

    public function olga()
    {
        return view('olga');
    }
}
