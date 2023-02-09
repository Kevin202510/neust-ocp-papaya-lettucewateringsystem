<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class WaterqualitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('waterqualities')->insert([
            [
              'id'   => 1, 
              'phvalue'  => 10000.20,
              'status' => 0,
            ],
            [
                'id'   => 2, 
                'phvalue'  => 10000.20,
                'status' => 0,
              ],
              [
                'id'   => 3, 
                'phvalue'  => 100.20,
                'status' => 0,
              ],
              [
                'id'   => 4, 
                'phvalue'  => 100.20,
                'status' => 0,
              ],
              [
                'id'   => 5, 
                'phvalue'  => 100.20,
                'status' => 0,
              ],
              [
                'id'   => 6, 
                'phvalue'  => 10000.20,
                'status' => 0,
              ],
              [
                'id'   => 7, 
                'phvalue'  => 9000.20,
                'status' => 0,
              ],
              [
                'id'   => 8, 
                'phvalue'  => 10000.20,
                'status' => 0,
              ],
              [
                'id'   => 9, 
                'phvalue'  => 1000.20,
                'status' => 0,
              ],
              [
                'id'   => 10, 
                'phvalue'  => 1300.20,
                'status' => 1,
              ],
            ]
            );
    }
}
