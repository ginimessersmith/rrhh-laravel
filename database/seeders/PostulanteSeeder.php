<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostulanteSeeder extends Seeder
{
    
    public function run(): void
    {

DB::table('postulantes')->insert([
    'Nombre' => 'Lucia',
    'Apellido' => 'García',
    'Email' => 'lucia.garcia@example.com',
    'Celular' => '76543210',
    'idCargo'=>'2',
]);


DB::table('postulantes')->insert([
    'Nombre' => 'Juan',
    'Apellido' => 'López',
    'Email' => 'juan.lopez@example.com',
    'Celular' => '71234567',
    'idCargo'=>'4',
]);


DB::table('postulantes')->insert([
    'Nombre' => 'María',
    'Apellido' => 'Hernández',
    'Email' => 'maria.hernandez@example.com',
    'Celular' => '65432109',
    'idCargo'=>'1',
]);


DB::table('postulantes')->insert([
    'Nombre' => 'Carlos',
    'Apellido' => 'Rodríguez',
    'Email' => 'carlos.rodriguez@example.com',
    'Celular' => '77654321',
    'idCargo'=>'3',
]);


DB::table('postulantes')->insert([
    'Nombre' => 'Ana',
    'Apellido' => 'Pérez',
    'Email' => 'ana.perez@example.com',
    'Celular' => '66554433',
    'idCargo'=>'6',
]);


DB::table('postulantes')->insert([
    'Nombre' => 'Pedro',
    'Apellido' => 'Sánchez',
    'Email' => 'pedro.sanchez@example.com',
    'Celular' => '79998877',
    'idCargo'=>'5',
]);


DB::table('postulantes')->insert([
    'Nombre' => 'Laura',
    'Apellido' => 'Martínez',
    'Email' => 'laura.martinez@example.com',
    'Celular' => '68887766',
    'idCargo'=>'8',
]);


DB::table('postulantes')->insert([
    'Nombre' => 'Miguel',
    'Apellido' => 'Gómez',
    'Email' => 'miguel.gomez@example.com',
    'Celular' => '75556644',
    'idCargo'=>'7',
]);

DB::table('postulantes')->insert([
    'Nombre' => 'Isabel',
    'Apellido' => 'Fernández',
    'Email' => 'isabel.fernandez@example.com',
    'Celular' => '76665544',
    'idCargo'=>'10',
]);

DB::table('postulantes')->insert([
    'Nombre' => 'Luis',
    'Apellido' => 'López',
    'Email' => 'luis.lopez@example.com',
    'Celular' => '73332211',
    'idCargo'=>'5',
]);

 }
}
