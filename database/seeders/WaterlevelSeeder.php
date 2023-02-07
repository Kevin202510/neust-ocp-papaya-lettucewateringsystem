<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use Illuminate\Support\Facades\Hash;

class WaterlevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('waterlevels')->insert([
            [
              'id'   => 1, 
              'waterlevel'  => 10000.20,
              'status' => 0,
            ],
            [
                'id'   => 2, 
                'waterlevel'  => 10000.20,
                'status' => 0,
              ],
              [
                'id'   => 3, 
                'waterlevel'  => 100.20,
                'status' => 0,
              ],
              [
                'id'   => 4, 
                'waterlevel'  => 100.20,
                'status' => 0,
              ],
              [
                'id'   => 5, 
                'waterlevel'  => 100.20,
                'status' => 0,
              ],
              [
                'id'   => 6, 
                'waterlevel'  => 10000.20,
                'status' => 0,
              ],
              [
                'id'   => 7, 
                'waterlevel'  => 9000.20,
                'status' => 0,
              ],
              [
                'id'   => 8, 
                'waterlevel'  => 10000.20,
                'status' => 0,
              ],
              [
                'id'   => 9, 
                'waterlevel'  => 1000.20,
                'status' => 0,
              ],
              [
                'id'   => 10, 
                'waterlevel'  => 1300.20,
                'status' => 1,
              ],
            ]
            );
    }
}
