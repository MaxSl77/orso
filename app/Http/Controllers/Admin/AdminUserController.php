<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminUserFormRequest;
use App\Models\AdminUser;

class AdminUserController extends Controller
{
    public function index()
    {
        $users = AdminUser::all();

        return view("admin.admin_users.index", [
            "users" => $users,
        ]);
    }

    public function create()
    {
        return view("admin.admin_users.create");
    }

    public function store(AdminUserFormRequest $request)
    {
        $data = $request->validated();

        AdminUser::create($data);

        return redirect(route("admin.admin_users.index"));
    }

    public function edit($id)
    {
        $user = AdminUser::findOrFail($id);

        return view("admin.admin_users.create", [
            'user' => $user,
        ]);
    }

    public function update(AdminUserFormRequest $request, $id)
    {
        $user = AdminUser::findOrFail($id);

        $user->update($request->validated());

        return redirect(route("admin.admin_users.index"));
    }

    public function destroy($id)
    {
        AdminUser::destroy($id);

        return redirect(route("admin.admin_users.index"));
    }
}
