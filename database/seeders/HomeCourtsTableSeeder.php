<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class HomeCourtsTableSeeder extends Seeder
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
            \DB::table('homecourts')->truncate();
        }

        \DB::table('homecourts')->insert([
            'name'      => 'Braemer CC',
            'created_at'      => date('Y-m-d H:i:s'),
            'updated_at'      => date('Y-m-d H:i:s')
        ],
        [
            'name'      => 'Braemer CC 1',
            'created_at'      => date('Y-m-d H:i:s'),
            'updated_at'      => date('Y-m-d H:i:s')
        ]
    );
    }
}
