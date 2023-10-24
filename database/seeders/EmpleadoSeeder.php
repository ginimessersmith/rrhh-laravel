<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EmpleadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Empleado 1
DB::table('empleados')->insert([
    'Nombre' => 'Roberto',
    'Apellido' => 'Gómez',
    'Email' => 'roberto.gomez@example.com',
    'Celular' => '76669988',
    'idCargo'=>'1',
]);

// Empleado 2
DB::table('empleados')->insert([
    'Nombre' => 'María',
    'Apellido' => 'López',
    'Email' => 'maria.lopez@example.com',
    'Celular' => '71112233',
    'idCargo'=>'3',
]);

// Empleado 3
DB::table('empleados')->insert([
    'Nombre' => 'Pedro',
    'Apellido' => 'Hernández',
    'Email' => 'pedro.hernandez@example.com',
    'Celular' => '79998877',
    'idCargo'=>'2',
]);

// Empleado 4
DB::table('empleados')->insert([
    'Nombre' => 'Laura',
    'Apellido' => 'Martínez',
    'Email' => 'laura.martinez@example.com',
    'Celular' => '68887766',
    'idCargo'=>'4',
]);

// Empleado 5
DB::table('empleados')->insert([
    'Nombre' => 'Miguel',
    'Apellido' => 'Fernández',
    'Email' => 'miguel.fernandez@example.com',
    'Celular' => '75556644',
    'idCargo'=>'6',
]);

// Empleado 6
DB::table('empleados')->insert([
    'Nombre' => 'Isabel',
    'Apellido' => 'Sánchez',
    'Email' => 'isabel.sanchez@example.com',
    'Celular' => '76665544',
    'idCargo'=>'7',
]);

// Empleado 7
DB::table('empleados')->insert([
    'Nombre' => 'Luis',
    'Apellido' => 'García',
    'Email' => 'luis.garcia@example.com',
    'Celular' => '73332211',
    'idCargo'=>'8',
]);

// Empleado 8
DB::table('empleados')->insert([
    'Nombre' => 'Ana',
    'Apellido' => 'Rodríguez',
    'Email' => 'ana.rodriguez@example.com',
    'Celular' => '74331122',
    'idCargo'=>'9',
]);

// Empleado 9
DB::table('empleados')->insert([
    'Nombre' => 'Javier',
    'Apellido' => 'Pérez',
    'Email' => 'javier.perez@example.com',
    'Celular' => '77778899',
    'idCargo'=>'10',
]);

// Empleado 10
DB::table('empleados')->insert([
    'Nombre' => 'Elena',
    'Apellido' => 'López',
    'Email' => 'elena.lopez@example.com',
    'Celular' => '72223344',
    'idCargo'=>'1',
]);

    }
}
