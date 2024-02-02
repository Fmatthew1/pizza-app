<?php

namespace App\Http\Controllers;

use App\Role;
use App\Permission;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function index()
    {
        $roles = Role::all();
        return view('roles.index', ['roles' => $roles,]);

    }

    public function create()
    {
        $roles = new Role();
        $roles->name = request('name');
        $roles->permission_id = request('permission_id');

        return view('roles.create', ['roles'=> $roles]);
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
        $role->name = $request->name;
        $role->save();

        return redirect('roles')->with('success','Role successfully created');

        
        
    

        // if ($request->has('permissions')) {
        //     $role->permissions()->attach($request->input('permissions'));
        // }

    
    }

    public function edit($id)
    {
        $role = Role::findOrFail($id);
        $permissions = Permission::all();
        return view('roles.update', ['role' => $role,'permissions'=> $permissions]);
    }

    public function show($id)
    {
        $role = Role::findOrFail($id);
        return view('roles.show', ['role'=> $role]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name'=> 'required|unique:roles|max:255',
        ]);
        
        $role = Role::findOrFail($id);
        $role->name = $request->name;
        //$role->permission_id = $request->permission_id;
        $role->save();
        return redirect('roles');
    
    }

}
