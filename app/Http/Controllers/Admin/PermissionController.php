<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;

class PermissionController extends Controller
{
    public function index() {
        if (view()->exists('admin.permission.index')) {
            $permissions = Permission::paginate(10);
            $vars = [
                'title' => 'Разрешения',
                'permissions' => $permissions
            ];

            return view('admin.permission.index', $vars);
        }
        abort(404);
    }

    public function create(Request $request) {
        if (view()->exists('admin.permission.create')) {
            if ($request->isMethod('post')) {
                $request->validate([
                    'name' => 'required'
                ]);

                $permission = new Permission();
                $permission->name = $request->input('name');
                $permission->save();

                $request->session()->flash('status', 'Разрешение "' . $permission->name . '" создана!');
                return redirect()->route('permission_index');
            }
            $vars = [
                'title' => 'Создание роли'
            ];
            return view('admin.permission.create', $vars);
        }
        abort(404);
    }

    public function edit (Request $request) {
        if (view()->exists('admin.permission.edit')) {
            if ($request->isMethod('post')) {
                $request->validate([
                    'name' => 'required'
                ]);

                $permission = Permission::find($request->id);
                $permission->name = $request->input('name');
                $permission->save();

                $request->session()->flash('status', 'Разрешение "' . $permission->name . '" изменено!');
                return redirect()->route('permission_index');
            }
            $vars = [
                'title' => 'Редактирование разрешения',
                'permission' => Permission::find($request->id)
            ];
            return view('admin.permission.edit', $vars);
        }
        abort(404);
    }

    public function delete(Request $request) {
        if ($request->isMethod('get') && isset($request->id)) {

            $permission = Permission::find($request->id);
            $permission->delete();

            $request->session()->flash('status', 'Разрешение "' . $permission->name . '" удалено!');
            return redirect()->back();
        }
        abort(404);
    }
}
