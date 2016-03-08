<?php

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
        DB::table('users')->insert([
            'name' => str_random(10),
            'email' => 'git@mcclainconcepts.com',
            'password' => 'LaravelTestPW',
        ]);
        DB::table('users')->insert([
            'name' => str_random(10),
            'email' => 'your@emailaddress.com',
            'password' => 'LaravelTestPW',
        ]);
    }
}
