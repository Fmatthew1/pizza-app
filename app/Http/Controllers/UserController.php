<?php

namespace App\Http\Controllers;
use App\Role;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class UserController extends Controller
{
   public function index()
   {
      $users = User::all();

      return view('users.index', ['users'=> $users]);
      
   }

   public function create()
   {
      $users = new User();
      $users->name = request('name');
      $users->email = request('email');
      $users->password = request('password');
      $users->role_id = request('role_id');
      $roles = new Role();
      
      return view('users.create', ['users' => $users, 'roles'=> $roles]);
   }

   public function show($id) {

      $user = User::findOrFail($id);

      return view('users.show', ['user' => $user]);
   }

   public function edit($id)
    {
        $user = User::findOrFail($id);
        $roles = Role::all();
        return view('users.update', ['user' => $user, 'roles' => $roles]);
    }

   public function store(Request $request)
   {
      $request->validate([
         'name' => 'required|unique:users|max:100',
         'email' => 'required|unique:users|email|max:100',
         'password'=> 'required|between:8,50|confirmed',
         'password_confirmation'=> 'required'
     ]);

      $user = new User();
      $user->name = $request->name;
      $user->email = $request->email;
      $user->password = Hash::make($request->password);
      $user->role_id = $request->role_id;
      $user->save();
      return redirect('users')->with('success','User successfully created');
   }

   public function update(Request $request, $id)
    {
      $request->validate([
         'name' => 'required|unique:users|max:100',
         'email' => 'required|unique:users|email|max:100',
         'password'=> 'required|between:8,50|confirmed',
     ]);

        $user = User::findOrFail($id);
        $Data = request();
        $user->name = $Data['name'];
        $user->email = $Data['email'];
        $user->save();

        return redirect('users')->with('Success', 'Users Successfully Updated');
    
    }
}
