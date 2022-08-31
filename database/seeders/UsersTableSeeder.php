<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
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
            \DB::table('users')->truncate();
        }

        \DB::table('users')->insert([
            'first_name'      => 'Adam',
            'last_name'       => 'Klein',
            'email'           => 'aklein4747@yahoo.com',
            'address1'       => '1234 Testing Ave.',
            'city'       => 'Los Angeles',
            'state_id'       => 1,
            'zip_code'       => '91316',
            'home_court_id'       => 1,
            'created_at'      => date('Y-m-d H:i:s'),
            'updated_at'      => date('Y-m-d H:i:s')
        ]);
    }
}
