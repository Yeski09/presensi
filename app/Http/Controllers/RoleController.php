<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function index() {
        $roles = Role::all();
        $detail = User::with('roles')->where('id', \Auth::id())->first();

        return view('roles.role',compact('roles','detail'));
    }

    public function create() {
        // $roles = Role::all();
        $detail = User::with('roles')->where('id', \Auth::id())->first();
        return view('roles.create',compact('detail'));
    }
    public function store(Request $request)
    {
      $request->validate([
        'name' => 'required',
      ]);
      Role::create($request->all());
      // return $role;
      return redirect()->route('role.index')
        ->with('success', 'Role Create Successfully.');
    }

    // public function update(Request $request, $id)
    // {
    //   $request->validate([
    //     'body' => 'required',
    //   ]);
    //   $roles = Role::find($id);
    //   $roles->update($request->all());
    //   return redirect()->route('roles.index')
    //     ->with('success', 'Roles updated successfully.');
    // }
}
