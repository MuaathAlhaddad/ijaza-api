<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MujazSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table( 'mujazs' )->delete();

        DB::table( 'mujazs' )->insert(
            [

                [
                    'first_name' => 'Muhammad',
                    'last_name'  => 'Abdullah',
                    'nickname'   => 'Prophet Muhammad',
                    'generation' => '1st century',
                    'sex'        => 'male',
                    'birth_date' => 'June 8, 571 AD',
                    'death_date' => 'June 8, 632 AD',
                    'notes'      => 'The prophet of Allah',
                    'biography'  => 'The prophet of Allah',
                    'mujeez_id'  => 0,
                    'country_id' => 191,
                    'admin_id'   => 1,
                ],
                [
                    'first_name' => 'Muaath',
                    'last_name'  => 'Alhaddad',
                    'nickname'   => 'Abu Jaber',
                    'generation' => '21st century',
                    'sex'        => 'male',
                    'birth_date' => '9/5/1995',
                    'death_date' => null,
                    'notes'      => 'Has not got the certificate yet.',
                    'biography'  => 'From Yemen, and work as a web developer',
                    'mujeez_id'  => 1,
                    'country_id' => 243,
                    'admin_id'   => 1,
                ]
            ]
        );
    }
}
