<?php

namespace App\Http\Controllers;
use App\Role;
use App\User;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class UserController extends Controller
{
//    public function __construct(){
//       $this->middleware('auth');
//   }
   public function index()
   {
      $users = User::all();
      $roles = Role::all();

      return view('users.index', ['users' => $users, 'roles' => $roles]);
      
   }

   public function create()
   {
      $users = new User();
      $users->name = request('name');
      $users->email = request('email');
      $users->password = request('password');
      $users->role_id = request('role_id');
      $roles = Role::all();
      
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
        //$assignedRoleId = $user->role_id;
        return view('users.update', ['user' => $user, 'roles' => $roles]);
    }

   public function store(Request $request)
   {
      $request->validate([
         'name' => 'required|unique:users|max:255',
         'email' => 'required|unique:users|email|max:255',
         'password' => 'required|between:8,255|confirmed',
         'password_confirmation'=> 'required',
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
      $userId = User::find($id);
      $request->validate([
         'name' => [
            'required',
            Rule::unique('users')->ignore($userId),
            'max:255',
         ],
         'email' => [
            'required',
            Rule::unique('users')->ignore($userId),
            'max:255'
         ],
         'password' => [
            'required',
            Rule::unique('users')->ignore($userId),
            'max:255'
         ],
         'role_id' => [
            'required'
         ]
     ]);

        $user = User::findOrFail($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->role_id = $request->role_id;
        $user->save();

        return redirect('users')->with('Success', 'Users Successfully Updated');
    
    }
}
