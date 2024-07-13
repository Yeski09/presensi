<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'id' => '1d8b09fc-9cae-483b-8c7b-e438dc913b04',
            'name' => 'ADMIN',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('roles')->insert([
            'id' => '89f0699c-565a-4d3e-b806-de3b1ef718bf',
            'name' => 'EMPLOYEE',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        // seeder user admin
        DB::table('users')->insert([
            'id' => '6b9c903d-4dd4-4e11-ba3d-326f4d926458',
            'full_name' => 'admin',
            'email' => 'admin@softui.com',
            'phone_number' => '37182718312',
            'password' => Hash::make('secret'),
            'role_id' => '1d8b09fc-9cae-483b-8c7b-e438dc913b04',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        //seeder employee 1
        DB::table('users')->insert([
            'id' => 'e183798a-855a-422d-a20a-612cb9460386',
            'full_name' => 'joko',
            'email' => 'joko@example.com',
            'phone_number' => '6238188281',
            'password' => Hash::make('secret'),
            'role_id' => '89f0699c-565a-4d3e-b806-de3b1ef718bf',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('employees')->insert([
            'id' => '46df64bd-2773-43ab-80f9-8d4b53a52369',
            'full_name' => 'joko',
            'department' => 'STAFF',
            'nik' => 1234,
            'address' => 'jepara',
            'dob' => now(),
            'birth_place' => 'jepara',
            'join_date' => now(),
            'join_age' => 20,
            'user_id' => 'e183798a-855a-422d-a20a-612cb9460386',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        //seeder employee 2
        DB::table('users')->insert([
            'id' => '5bb7cfd0-08cb-41f7-99b6-07097dfcf1dd',
            'full_name' => 'jamal',
            'email' => 'jamal@example.com',
            'phone_number' => '6238188282',
            'password' => Hash::make('secret'),
            'role_id' => '89f0699c-565a-4d3e-b806-de3b1ef718bf',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('employees')->insert([
            'id' => '3c61e9b4-b66b-4274-aa9b-1c515541f95f',
            'full_name' => 'jamal',
            'department' => 'STAFF',
            'nik' => 1235,
            'address' => 'jepara',
            'dob' => now(),
            'birth_place' => 'jepara',
            'join_date' => now(),
            'join_age' => 20,
            'user_id' => '5bb7cfd0-08cb-41f7-99b6-07097dfcf1dd',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        //seeder employee 3
          DB::table('users')->insert([
            'id' => 'f317d427-5562-4100-8596-a416a5871473',
            'full_name' => 'jodi',
            'email' => 'jodi@example.com',
            'phone_number' => '6238188283',
            'password' => Hash::make('secret'),
            'role_id' => '89f0699c-565a-4d3e-b806-de3b1ef718bf',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('employees')->insert([
            'id' => 'dd1953a4-e71f-4190-9865-b525a278ffd9',
            'full_name' => 'jodi',
            'department' => 'STAFF',
            'nik' => 12344,
            'address' => 'jepara',
            'dob' => now(),
            'birth_place' => 'jepara',
            'join_date' => now(),
            'join_age' => 20,
            'user_id' => 'f317d427-5562-4100-8596-a416a5871473',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        
    }
}
