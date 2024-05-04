<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\AdminUser;
use App\Models\Equipments;
use App\Models\Procedure;
use App\Models\ProcedureGroup;
use App\Models\Sale;
use App\Models\Stuff;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $sales = Sale::all()->count();
        $adminUser = AdminUser::all()->count();
        $equipments = Equipments::all()->count();
        $procedureGroups = ProcedureGroup::all()->count();
        $procedure = Procedure::all()->count();

        return view("admin.home", [
            "sales" => $sales,
            "adminUser" => $adminUser,
            "equipments" => $equipments,
            "procedureGroups" => $procedureGroups,
            "procedure" => $procedure,
        ]);
    }
}
