<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Hakiashbahanie',
            'email' => 'haki@gmail.com',
            'role' => 'admin',
            'password' => Hash::make('password')
        ]);
        User::create([
            'name' => 'FAJAR HAQQY ASHBAHANIE',
            'email' => 'fajar@gmail.com',
            'role' => 'dokter',
            'password' => Hash::make('password')
        ]);
        User::create([
            'name' => 'TALIA KAMIL',
            'email' => 'talia@gmail.com',
            'role' => 'perawat',
            'password' => Hash::make('password')
        ]);
        User::create([
            'name' => 'SAIFUL FAHMI',
            'email' => 'fahmi@gmail.com',
            'role' => 'pelaksana',
            'password' => Hash::make('password')
        ]);
    }
}
