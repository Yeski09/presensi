<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class AttendanceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('attendances')->insert([
            'id' => Str::uuid(),
            'date' => now(),
            'employee_id' => '46df64bd-2773-43ab-80f9-8d4b53a52369',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
