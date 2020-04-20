<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    public function index() {
        if (view()->exists('admin.role.index')) {
            $roles = Role::with('permissions')->paginate(10);
            $vars = [
                'title' => 'Роли',
                'roles' => $roles
            ];
            return view('admin.role.index', $vars);
        }
        abort(404);
    }

    public function create(Request $request) {
        if (view()->exists('admin.role.create')) {
            if ($request->isMethod('post')) {
                $request->validate([
                    'name' => 'required'
                ]);

                $role = new Role();
                $role->name = $request->input('name');
                $role->save();

                if (!empty($request->input('permissions'))) {
                    $role->syncPermissions($request->input('permissions'));
                }

                $request->session()->flash('status', 'Роль "' . $role->name . '" создана!');
                return redirect()->route('roleIndex');
            }
            $permissions = Permission::all();
            $vars = [
                'title' => 'Создание роли',
                'permissions' => $permissions
            ];
            return view('admin.role.create', $vars);
        }
        abort(404);
    }

    public function edit (Request $request) {
        if (view()->exists('admin.role.edit')) {
            if ($request->isMethod('post')) {
                $request->validate([
                    'name' => 'required'
                ]);

                $role = Role::find($request->id);
                $role->name = $request->input('name');
                $role->save();

                if (!empty($request->input('permissions'))) {
                    $role->syncPermissions($request->input('permissions'));
                }

                $request->session()->flash('status', 'Роль "' . $role->name . '" изменена!');
                return redirect()->route('roleIndex');
            }
            $vars = [
                'title' => 'Редактирование роли',
                'permissions' => Permission::all(),
                'role' => Role::with('permissions')->find($request->id)
            ];

            return view('admin.role.edit', $vars);
        }
        abort(404);
    }

    public function delete(Request $request) {
        if ($request->isMethod('get') && isset($request->id)) {

            $role = Role::find($request->id);
            $role->delete();

            $request->session()->flash('status', 'Роль "' . $role->name . '" удалена!');
            return redirect()->back();
        }
        abort(404);
    }
}
