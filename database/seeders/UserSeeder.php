<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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
            'name' => 'AAMLOK_ADMIN',
            'email' => 'admin@gmail.com',
            'role' => 'admin',
            'password' => Hash::make('aamlok@123'),
        ]);
    }
}
