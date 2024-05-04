<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SalesRequest;
use App\Models\Sale;
use Illuminate\Http\Request;

class SalesController extends Controller
{
    public function index()
    {
        $sales = Sale::all();

        return view("admin.sales.index", [
            "sales" => $sales,
        ]);
    }


    public function create()
    {
        return view("admin.sales.create", []);
    }



    public function store(SalesRequest $request)
    {
        Sales::create($request->validated());

        return redirect(route("admin.sales.index"));
    }


    public function edit(Sales $sale)
    {
        return view("admin.sales.create", [
            "sale" => $sale,
        ]);
    }

    public function update(SalesRequest $request, Sales $sale)
    {
        $sale->update($request->validated());

        return redirect(route("admin.sales.index"));
    }

    public function destroy(Sales $sale)
    {
        $sale->delete();

        return redirect(route("admin.sales.index"));
    }
}
