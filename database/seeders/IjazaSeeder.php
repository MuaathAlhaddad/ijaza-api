<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IjazaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table( 'ijazas' )->delete();

        DB::table( 'ijazas' )->insert( [
            'mujaz_id'  => 2,
            'mujeez_id' => 1,
            'location'  => 'Jalan 10/21D, Medan Idaman Setapak 53000 KUALA LUMPUR WILAYAH PERSEKUTUAN MALAYSIA  ',
        ] );

    }
}
