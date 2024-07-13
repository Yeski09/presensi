<?php

namespace App\Http\Controllers;

use App\Models\Attendance;
use App\Models\Employee;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        return redirect('dashboard');
    }
    public function dashboard() {
        
        $detail = User::with('roles')->where('id', \Auth::id())->first();
        // var_dump($detail)
        if($detail->roles->name == 'ADMIN') {
            $datas['user'] = User::count();
            $datas['employee'] = Employee::count();
            $datas['attendance'] = Attendance::count();
            $datas['pay'] = Attendance::count() * 100000;
            return view('dashboard', compact('detail', 'datas'));
        }else {
            return view('dashboard2', compact('detail'));

        }
    }

    public function kehadiran() {
        $detail = User::with('roles')->where('id', \Auth::id())->first();
        return view('kehadiran', compact('detail'));
    }

    public function recordAbsensi() {
        $detail = User::with('roles')->where('id', \Auth::id())->first();
        return view('record-absensi', compact('detail'));
    }

    public function store(Request $request)
    {   
        // return $request["id"];
        $employee = Employee::where('user_id', $request["id"])->first();
        $date = Carbon::now();
        // return $request["id"];
        $attendance = Attendance::create([
            'employee_id' => $employee->id,
            'date' => $date
        ]);
        return $attendance;
        // return \Auth::;
    //   $request->validate([
    //     'name' => 'required',
    //   ]);
    //   Role::create($request->all());

    //   return redirect()->route('role.index')
        // ->with('success', 'Role Create Successfully.');
    }
}
