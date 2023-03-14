<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\User::create([
            'name'  => 'ugun',
            'email'  => 'ugun1@gmail.com',
            'password'  => Hash::make('password'),
            'roles' => 'ADMIN',
            'username'  => 'ugun1'
        ]);


    }
}
