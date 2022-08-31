<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserPlayingsTableSeeder extends Seeder
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
            \DB::table('user_playing')->truncate();
        }

        \DB::table('user_playing')->insert([
            'user_id' => 1,
            'playing_id' => 1,
            'created_at'      => date('Y-m-d H:i:s'),
            'updated_at'      => date('Y-m-d H:i:s')
        ]
    );
    }
}
