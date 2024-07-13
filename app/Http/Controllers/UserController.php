<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    public function index()
    {
        // $roles = Role::all();
        $detail = User::with('roles')->where('id', \Auth::id())->first();

        $users = User::with('roles')->get();
        return view('users.user', compact('users', 'detail'));
    }

    public function create()
    {
        $roles = Role::all();
        $detail = User::with('roles')->where('id', \Auth::id())->first();

        return view('users.create', compact('roles', 'detail'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'full_name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'role_id' => 'required',
            'phone_number' => 'required'
        ]);
        $request['password'] = Hash::make($request['password']);
        User::create($request->all());
        // return $role;
        return redirect()->route('user.index')
            ->with('success', 'User Create Successfully.');
    }

    public function edit($id)
    {
        $users = User::where('id', $id)->first();
        $roles = Role::all();
        $datas['user'] = $users;
        $datas['roles'] = $roles;
        $detail = User::with('roles')->where('id', \Auth::id())->first();

        return view('users.edit', compact('datas', 'detail'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'full_name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'role_id' => 'required',
            'phone_number' => 'required'
        ]);
        // return $id;
        $users = User::find($id);
        $users->update($request->all());
        $request['password'] = Hash::make($request['password']);

        return redirect()->route('user.index')
            ->with('success', 'User Update Successfully.');
    }
}
