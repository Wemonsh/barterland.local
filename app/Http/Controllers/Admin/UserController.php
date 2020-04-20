<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    public function index() {
        if (view()->exists('admin.user.index')) {
            $users = User::paginate(10);
            $vars = [
                'title' => 'Пользователи',
                'users' => $users
            ];
            return view('admin.user.index', $vars);
        }
        abort(404);
    }

    public function edit(Request $request) {

        $user = User::with('roles')->with('permissions')->find($request->id);
        $permissions = Permission::all();
        $roles = Role::all();

        $vars = [
            'title' => 'Редактирование пользователя',
            'user' => $user,
            'permissions' => $permissions,
            'roles' => $roles
        ];

        return view('admin.user.edit', $vars);

    }
}
