<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use Illuminate\Support\Facades\Hash;

class CarbondioxideSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('carbondioxides')->insert([
            [
              'id'   => 1, 
              'carbondioxideAmount'  => 10000.20,
              'status' => 0,
            ],
            [
                'id'   => 2, 
                'carbondioxideAmount'  => 10000.20,
                'status' => 0,
              ],
              [
                'id'   => 3, 
                'carbondioxideAmount'  => 100.20,
                'status' => 0,
              ],
              [
                'id'   => 4, 
                'carbondioxideAmount'  => 100.20,
                'status' => 0,
              ],
              [
                'id'   => 5, 
                'carbondioxideAmount'  => 100.20,
                'status' => 0,
              ],
              [
                'id'   => 6, 
                'carbondioxideAmount'  => 10000.20,
                'status' => 0,
              ],
              [
                'id'   => 7, 
                'carbondioxideAmount'  => 9000.20,
                'status' => 0,
              ],
              [
                'id'   => 8, 
                'carbondioxideAmount'  => 10000.20,
                'status' => 0,
              ],
              [
                'id'   => 9, 
                'carbondioxideAmount'  => 1000.20,
                'status' => 0,
              ],
              [
                'id'   => 10, 
                'carbondioxideAmount'  => 1300.20,
                'status' => 1,
              ],
            ]
            );
    }
}
