<?php

namespace App\Http\Controllers;
use App\Permission;
use App\Role;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;


class PermissionController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
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
    
        return view('permissions.create');
    }

    public function store(Request $request)
    {
       
        $request->validate([
            'name' => 'required|unique:permissions|max:255',
            'description' => 'required',
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
        $permissionId = Permission::find($id);
        $request->validate([
            'name'=> [
                'required',
                Rule::unique('permissions')->ignore($permissionId),
                'max:255'
            ],
            'description'=> [
                'required',
                Rule::unique('permissions')->ignore($permissionId),
                'max:255'
            ]
           
        ]);
      
        
        $permission = Permission::findOrFail($id);
        $permission->name = $request->name;
        $permission->description = $request->description;
        $permission->save();
        return redirect('permissions');
    
    }

        
}
