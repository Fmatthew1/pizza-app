<?php

namespace App\Http\Controllers;
use App\Permission;
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
}
