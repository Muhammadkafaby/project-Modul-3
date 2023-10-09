<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
            'username' => 'Admin',
            'fullName' => 'Administrator',
            'email' => 'admin@example.com',
            'address' => 'Jl. Raya No. 1',
            'phoneNumber' => '081234567890',
            'agama' => 'Islam',
            'password' => Hash::make('admin'),
            'birthDate' => '2000-01-01',
            'jenisKelamin' => '1',
        ]);
    }
}

