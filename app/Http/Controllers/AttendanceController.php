<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Role;
use App\Models\User;
// use Barryvdh\DomPDF\Facade as PDF;
use PDF;
// use Barryvdh\DomPDF\Facade as PDF;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AttendanceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $detail = User::with('roles')->where('id', \Auth::id())->first();
        $attendances = Employee::withCount('attendance')->get();
        // return $attendances;
        return view('kehadiran', compact('detail','attendances'));
    }

    public function export(string $id)
    {
        // $detail = User::with('roles')->where('id', \Auth::id())->first();
        // $attendances = Employee::withCount('attendance')->get();
        $datas['employee'] = Employee::where('id', $id)->withCount('attendance')->first();
        $datas['date'] = Carbon::now()->format('Y-m-d');

        // return $attendances;
        return view('pdf', compact('datas'));
        // $pdf = Pdf::loadView('pdf', compact('datas'));
        // $pdf = PDF::loadView('pdf',['datas' => $datas]);
        // return $pdf->stream();
        
        // return $pdf->download('disney.pdf');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
