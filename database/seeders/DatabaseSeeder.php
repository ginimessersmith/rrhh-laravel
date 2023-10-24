<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(UserSeeder::class);
        $this->call(CargoSeeder::class);
        $this->call(EmpleadoSeeder::class);
        $this->call(PostulanteSeeder::class);
        $this->call(DepartamentoSeeder::class);
        
    }
}
