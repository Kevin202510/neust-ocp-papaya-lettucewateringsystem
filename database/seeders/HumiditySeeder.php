<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use Illuminate\Support\Facades\Hash;

class HumiditySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('humidities')->insert([
            [
              'id'   => 1, 
              'humidity'  => 60.5,
              'status' => 0,
            ],
            [
                'id'   => 2, 
                'humidity'  => 60.5,
                'status' => 0,
              ],
              [
                'id'   => 3, 
                'humidity'  => 45.52,
                'status' => 0,
              ],
              [
                'id'   => 4, 
                'humidity'  => 45.52,
                'status' => 0,
              ],
              [
                'id'   => 5, 
                'humidity'  => 45.52,
                'status' => 0,
              ],
              [
                'id'   => 6, 
                'humidity'  => 60.5,
                'status' => 0,
              ],
              [
                'id'   => 7, 
                'humidity'  => 25.5,
                'status' => 0,
              ],
              [
                'id'   => 8, 
                'humidity'  => 60.5,
                'status' => 0,
              ],
              [
                'id'   => 9, 
                'humidity'  => 55.2,
                'status' => 0,
              ],
              [
                'id'   => 10, 
                'humidity'  => 65.8,
                'status' => 1,
              ],
            ]
            );
    }
}
