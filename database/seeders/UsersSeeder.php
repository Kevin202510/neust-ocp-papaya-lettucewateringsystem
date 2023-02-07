<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'role_id' => 1,
                'fname' => 'kevin felix',
                'lname' => 'caluag',
                'email' => 'superadmin@gmail.com',
                'password' => Hash::make("password"),
            ],
            [
                'role_id' => 2,
                'fname' => 'Employee',
                'lname' => 'Employee',
                'email' => 'employee@gmail.com',
                'password' => Hash::make("password"),
            ]
            ]);
    }
}
