<?php

namespace App\Http\Controllers;
use App\Permission;
use App\Role;
use Illuminate\Http\Request;


class PermissionController extends Controller
{
    public function index()
    {
        $permissions = Permission::all();
        return view('permissions.index',[
            'permissions' => $permissions,
        ]);
    }

    public function create()
    {
        
        $permissions = new Permission();
       
        $permissions->name = request('name');
        $permissions->description = request('description');
        $permissions->permission_id = request('permission_id');
        //dd($permissions);
        return view('permissions.create', ['permissions'=> $permissions]);
    }

    public function store(Request $request)
    {
       
        $request->validate([
            'name'=> 'required|unique:permissions|max:255',
            'description'=> 'required|unique:permissions',
        ]); 
        
        $permission = new Permission();
        $permission->name = $request->name;
        $permission->description = $request->description;
        $permission->save();

        return redirect('permissions')->with('success','Permission successfully created');
    }

    public function edit($id)
    {
        $permission = Permission::findOrFail($id);
        $roles = Role::all();
        return view('permissions.update', ['permission' => $permission, 'roles' => $roles]);
    }

    public function show($id)
    {
        $permission = Permission::findOrFail($id);
        return view('permissions.show', ['permission'=> $permission]);
    }

    public function update(Request $request, $id)
    {
      
        $request->validate([
            'name'=> 'required|unique:permissions|max:255',
            'description'=> 'required|unique:permissions',
        ]);
      
        
        $permission = Permission::findOrFail($id);
        $permission->name = $request->name;
        $permission->description = $request->description;
        $permission->save();
        return redirect('permissions');
    
    }

        
}
