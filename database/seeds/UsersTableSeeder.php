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
        DB::table('users')->truncate();
        App\User::create([
        	'name' => 'user1',
        	'email' => 'user1@gmail.com',
        	'password' => bcrypt('123456'),
        ]);
        App\User::create([
        	'name' => 'user2',
        	'email' => 'user2@gmail.com',
        	'password' => bcrypt('123456'),
        ]);
    }
}
