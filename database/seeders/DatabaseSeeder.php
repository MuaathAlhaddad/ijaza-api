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
        $this->call( [
            CountrySeeder::class,
            AdminSeeder::class,
            MujazSeeder::class,
            IjazaSeeder::class,
            UserSeeder::class
        ] );
    }
}
