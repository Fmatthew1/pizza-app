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
            'name'=> 'required|max:255',
        ]); 

        $role = new Role();
        $role->name = $request->name;
        $role->save();
        return redirect()->route('/roles')->with('success','Role successfully created');
    

        // if ($request->has('permissions')) {
        //     $role->permissions()->attach($request->input('permissions'));
        // }

        // return redirect()->route('roles.index');
    }

    public function edit($id)
    {
        return view('roles.update');
    }

    public function update(Request $request, Role $role)
    {
        $request->validate([
            'name'=> 'name',
            ]);
            $role->name = $request->name;
            $role->save();
            return redirect()->route('/roles');
    
    }

}
