<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class StatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /**
         * Reset the users table
         */
        if (\App::environment('local')) {
            \DB::table('states')->truncate();
        }

        \DB::table('states')->insert([
            'name'      => 'CA',
            'created_at'      => date('Y-m-d H:i:s'),
            'updated_at'      => date('Y-m-d H:i:s')
        ],
        [
            'name'      => 'Chicago',
            'created_at'      => date('Y-m-d H:i:s'),
            'updated_at'      => date('Y-m-d H:i:s')
        ]
    );
    }
}
