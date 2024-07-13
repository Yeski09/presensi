<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class EmployeeController extends Controller
{
    public function index() {
        $detail = User::with('roles')->where('id', \Auth::id())->first();
        $employee = Employee::with('users')->get();
        return view('employee.employee', compact('employee','detail'));
    }

    public function create() {
        $roles = Role::all();
        $detail = User::with('roles')->where('id', \Auth::id())->first();
        return view('employee.create', compact('roles','detail'));
    }

    public function edit($id) {
        $employee = Employee::with('users')->where('id',$id)->first();
        $roles = Role::all();
        $datas['employee'] = $employee;
        $datas['roles'] = $roles;
        $detail = User::with('roles')->where('id', \Auth::id())->first();

        return view('employee.edit', compact('datas','detail'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'full_name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'role_id' => 'required',
            'phone_number' => 'required',

        ]);
        $users['full_name']= $request['full_name'];
        $users['email']= $request['email'];
        $users['password']=Hash::make($request['password']);
        $users['role_id']= $request['role_id'];
        $users['phone_number']= $request['phone_number'];

        // $request['password'] = Hash::make($request['password']);
        $user = User::create($users);
        // var_dump($user);
        
        $employee['full_name'] = $user['full_name'];
        $employee['department'] = $request['department'];
        $employee['nik'] = $request['nik'];
        $employee['address'] = $request['address'];
        $employee['dob'] = $request['dob'];
        $employee['birth_place'] = $request['birth_place'];
        $employee['join_date'] = $request['join_date'];
        $employee['join_age'] = $request['join_age'];
        $employee['user_id'] = $user->id;

        Employee::create($employee);



        // return $role;
        return redirect()->route('employee.index')
            ->with('success', 'Employee Create Successfully.');
    }

    
}
