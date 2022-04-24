<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'Admin@gmail.com',
            'password' => Hash::make('password'),
        ]);
        DB::table('users')->insert([
            'name' => 'TestUser',
            'email' => 'TestUser@gmail.com',
            'password' => Hash::make('TestUser'),
        ]);
    }
}
