<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Permission;
use Spatie\Permission\Models\Permission as ModelsPermission;

class PermissionController extends Controller
{
    public function index()
    {
        $permissions = ModelsPermission::all();
        return view('permisos.index', ['permissions' => $permissions]);
    }

    public function store( request $request ) 
    {
        $this->validate($request,['name' => 'required','permission'=>'required']);
        $permission = \Spatie\Permission\Models\Permission::create(['name'=> $request->input('name')]);
        $permission->syncPermissions($request->input('permission'));
 
        return redirect();
    }

    public function update(Request $request, $id)
    {
        $permission = ModelsPermission::findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:255|unique:permissions,name,' . $permission->id,
            // Agrega otras validaciones según tus necesidades
        ]);

        $permission->name = $request->input('name');
        // Actualiza otros campos si es necesario
        $permission->save();

        return redirect()->back();
    }

    public function destroy($id)
    {
        $permission = ModelsPermission::findOrFail($id);
        $permission->delete();

        return redirect()->route('permissions.index')->with('success', 'Permiso eliminado exitosamente');
    }
}
