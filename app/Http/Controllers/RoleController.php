<?php

namespace App\Http\Controllers;

use App\Role;
use App\Permission;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    public function index()
    {
        $roles = Role::all();
        return view('roles.index', ['roles' => $roles]);

    }

    public function create()
    {
        $permissions = Permission::all();
        return view('roles.create', ['permissions' => $permissions]);
    }

    public function assignRole(Request $request, Role $user)
    {
        // Assign role to user
    }

    public function store(Request $request)
    {
       
        $request->validate([
            'name'=> 'required|unique:roles|max:255',
        ]); 
        
        $role = new Role();
        $role->name = request('name');
        $role->save();
        $role->permissions()->sync($request->permissions);

        return redirect('roles')->with('success','Role successfully created');
    
    }

    public function edit($id)
    {
        $role = Role::findOrFail($id);
        $permissions = Permission::all();
        $assignedPermissions = $role->permissions()->pluck('permissions.id')->all();
        return view('roles.update', ['role' => $role, 'permissions'=> $permissions, 'assignedPermissions'=> $assignedPermissions]);
    }

    public function show($id)
    {
        $role = Role::findOrFail($id);
        return view('roles.show', ['role'=> $role]);
    }

    public function update(Request $request, $id)
    {
        $roleId = Role::find($id);
        $request->validate([
            'name'=> [
                'required',
                Rule::unique('roles')->ignore($roleId),
                'max:255'
            ]
        ]);
        
        $role = Role::findOrFail($id);

        $input = request();
        $role = Role::findOrFail($id);
        $role->name = $input['name'];
        $role->save();

        $role->permissions()->sync($request->permissions);
        return redirect('roles');
    
    }

}
