<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
class CargoSeeder extends Seeder
{
    public function run(): void
    {
        // Cargo 1
DB::table('cargos')->insert([
    'Nombre' => 'Director Financiero',
    'Descripcion' => 'Encargado de la gestión financiera de la empresa',
]);

// Cargo 2
DB::table('cargos')->insert([
    'Nombre' => 'Gerente de Producción',
    'Descripcion' => 'Supervisa la producción y operaciones de la empresa',
]);

// Cargo 3
DB::table('cargos')->insert([
    'Nombre' => 'Coordinador de Ventas',
    'Descripcion' => 'Coordina las actividades del equipo de ventas',
]);

// Cargo 4
DB::table('cargos')->insert([
    'Nombre' => 'Especialista en Recursos Humanos',
    'Descripcion' => 'Maneja procesos de reclutamiento y gestión del personal',
]);

// Cargo 5
DB::table('cargos')->insert([
    'Nombre' => 'Analista de Datos',
    'Descripcion' => 'Analiza y reporta datos clave para la toma de decisiones',
]);

// Cargo 6
DB::table('cargos')->insert([
    'Nombre' => 'Diseñador de Interfaz de Usuario',
    'Descripcion' => 'Crea interfaces de usuario atractivas y funcionales',
]);

// Cargo 7
DB::table('cargos')->insert([
    'Nombre' => 'Especialista en Redes Sociales',
    'Descripcion' => 'Gestiona la presencia de la empresa en redes sociales',
]);

// Cargo 8
DB::table('cargos')->insert([
    'Nombre' => 'Ingeniero de Software',
    'Descripcion' => 'Desarrolla software y aplicaciones de alta calidad',
]);

// Cargo 9
DB::table('cargos')->insert([
    'Nombre' => 'Economista de Mercado',
    'Descripcion' => 'Analiza tendencias económicas y de mercado',
]);

// Cargo 10
DB::table('cargos')->insert([
    'Nombre' => 'Especialista en Soporte Técnico',
    'Descripcion' => 'Brinda soporte técnico avanzado a los usuarios',
]);

        
        
    }
}
