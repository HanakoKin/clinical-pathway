<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Database\Seeders\DhfSeeder;
use Illuminate\Database\Seeder;
use Database\Seeders\DiareSeeder;
use Database\Seeders\KemoterapiSeeder;
use Database\Seeders\HemodialisisSeeder;
use Database\Seeders\GastroenteritisSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        $this->call([
            DhfSeeder::class,
            TbpSeeder::class,
            KatarakSeeder::class,
            KemoterapiSeeder::class,
            DiareSeeder::class,
            HemodialisisSeeder::class,
            GastroenteritisSeeder::class
        ]);
    }
}
