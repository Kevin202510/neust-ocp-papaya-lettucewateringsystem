<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            CarbondioxideSeeder::class,
            HumiditySeeder::class,
            LightSeeder::class,
            RoleSeeder::class,
            SensorconfigurationSeeder::class,
            WaterqualitySeeder::class,
            TemperatureSeeder::class,
            UsersSeeder::class,
            WaterlevelSeeder::class,
        ]);
    }
}
