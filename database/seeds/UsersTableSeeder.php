<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

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
        	'name' => 'leia',
        	'email' => 'chris_olivera97@hotmail.com',
        	'password' => 'fotografia426',
        ]);
    }
}
