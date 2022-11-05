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
            'name' => 'admin',
            'email' => 'admim@example.com',
            'password' => '1qaz2wsx',
            'phone' => '00000000000',
            'role' => 0,
            'remember_token' => null,
        ]);
    }
}
