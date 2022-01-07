<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UsuariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        //** Creando Usuario admin del sistema es el unico que tiene permisos para Crear nuevos usuarios con sus roles respectivos */
        //** Admin */
        User::create([
           'name'=> 'Admin del Sistema',
           'email'=> 'admin@admin.com',
           'password'=> bcrypt('1234qwer')
       ])->assignRole('Admin');

       //** Creando Usuario Manager de Cursos*/
       //** Manager Cursos */
       User::create([
        'name'=> 'Cursos Mananger',
        'email'=> 'cursos@admin.com',
        'password'=> bcrypt('1234qwer')
    ])->assignRole('Curso_Manager');

    //** Creando Usuario Manager de Cd Files*/
    //** Manager Documentos CD*/

    User::create([
        'name'=> 'Cd Files Mananger',
        'email'=> 'cdfiles@admin.com',
        'password'=> bcrypt('1234qwer')
    ])->assignRole('CdFiles_Manager');

    //** Creando Ususarios de prueba para ver como Actula la Tabla Usuarios( Eliminar post_entrega)


    }
}
