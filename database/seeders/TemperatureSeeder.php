<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use Illuminate\Support\Facades\Hash;

class TemperatureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('temperatures')->insert([
            [
              'id'   => 1, 
              'temperature'  => 37.20,
              'status' => 0,
            ],
            [
                'id'   => 2, 
                'temperature'  => 37.20,
                'status' => 0,
              ],
              [
                'id'   => 3, 
                'temperature'  => 45.80,
                'status' => 0,
              ],
              [
                'id'   => 4, 
                'temperature'  => 45.80,
                'status' => 0,
              ],
              [
                'id'   => 5, 
                'temperature'  => 45.80,
                'status' => 0,
              ],
              [
                'id'   => 6, 
                'temperature'  => 37.20,
                'status' => 0,
              ],
              [
                'id'   => 7, 
                'temperature'  => 20.30,
                'status' => 0,
              ],
              [
                'id'   => 8, 
                'temperature'  => 37.20,
                'status' => 0,
              ],
              [
                'id'   => 9, 
                'temperature'  => 50.20,
                'status' => 0,
              ],
              [
                'id'   => 10, 
                'temperature'  => 45.20,
                'status' => 1,
              ],
            ]
            );
    }
}
