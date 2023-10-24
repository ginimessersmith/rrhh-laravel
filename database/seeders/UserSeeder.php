<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $usuario = User::create([
            'name'=>'Carlos',
            'email'=>'carlos@gmail.com',
            'password'=>Hash::make('12345678'),
        ]);

        $usuario = User::create([
            'name'=>'Andres',
            'email'=>'andres@gmail.com',
            'password'=>Hash::make('12345678'),
        ]);

        $usuario = User::create([
            'name'=>'Jose',
            'email'=>'jose@gmail.com',
            'password'=>Hash::make('12345678'),
        ]);

        $usuario = User::create([
            'name'=>'Fernando',
            'email'=>'fernando@gmail.com',
            'password'=>Hash::make('12345678'),
        ]);

        $usuario = User::create([
            'name'=>'Any',
            'email'=>'any@gmail.com',
            'password'=>Hash::make('12345678'),
        ]);

        $usuario = User::create([
            'name'=>'Reny',
            'email'=>'reny@gmail.com',
            'password'=>Hash::make('12345678'),
        ]);
    }
}
