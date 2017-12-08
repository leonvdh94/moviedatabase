<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('users')->insert([
    		'name' => 'user',
    		'email' => 'user@user.com',
    		'password' => bcrypt('user'),
    	]);

    	DB::table('users')->insert([
    		'name' => 'admin',
    		'email' => 'admin@admin.com',
    		'password' => bcrypt('admin'),
    		'role' => '2',
    	]);
    }
}
