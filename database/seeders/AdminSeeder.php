<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // first seeder
        User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('123456'),
        ]);
        // last seeder
        User::create([
            'name' => 'Gory',
            'email' => 'gory@gmail.com',
            'password' => Hash::make('123456'),
        ]);
        //  third seeder
        User::create([
            'name' => 'Salma',
            'email' => 'salma@gmail.com',
            'password' => Hash::make('123456'),
        ]);
    
    }
}
