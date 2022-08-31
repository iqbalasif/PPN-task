<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PlayingTimesTableSeeder extends Seeder
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
            \DB::table('playing_times')->truncate();
        }

        \DB::table('playing_times')->insert([
            'type' => 'Weekends',
            'created_at'      => date('Y-m-d H:i:s'),
            'updated_at'      => date('Y-m-d H:i:s')
        ]
    );

    \DB::table('playing_times')->insert([
        'type' => 'Weekday Mornings',
        'created_at'      => date('Y-m-d H:i:s'),
        'updated_at'      => date('Y-m-d H:i:s')
    ]);

    \DB::table('playing_times')->insert([
        'type' => 'Weekday Afternoons',
        'created_at'      => date('Y-m-d H:i:s'),
        'updated_at'      => date('Y-m-d H:i:s')
    ]);

    \DB::table('playing_times')->insert(
        [
            'type' => 'Weekday Evenings',
            'created_at'      => date('Y-m-d H:i:s'),
            'updated_at'      => date('Y-m-d H:i:s')
        ]);
    }
}
