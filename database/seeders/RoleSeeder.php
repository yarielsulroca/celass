<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role1= Role::create(['name'=>'Admin']);
        $role2= Role::create(['name'=>'Curso_Manager']);
        $role3= Role::create(['name'=>'CdFiles_Manager']);
        //***** Permisos para el index de admin */
       Permission::create(['name'=>'admin.index'])->syncRoles([$role1,$role2,$role3]);
       Permission::create(['name'=>'change_password'])->syncRoles([$role1,$role2,$role3]);
       Permission::create(['name'=>'muestra'])->syncRoles([$role1,$role2,$role3]);

        //***** Permisos para los log del sistema***/
       Permission::create(['name'=>'admin.logs'])->syncRoles([$role1]);
        //***** Permisos para Usuarios **/
        Permission::create(['name'=>'usuarios.index'])->syncRoles([$role1]);
        Permission::create(['name'=>'usuarios.create'])->syncRoles([$role1]);
        Permission::create(['name'=>'usuarios.edit'])->syncRoles([$role1,$role2,$role3]);
        Permission::create(['name'=>'usuarios.destroy'])->syncRoles([$role1]);
        Permission::create(['name'=>'usuarios.update'])->syncRoles([$role1]);
        //******** Permisos la cursos */
        Permission::create(['name'=>'cursos.index'])->syncRoles([$role1,$role2]);
        Permission::create(['name'=>'cursos.create'])->syncRoles([$role1,$role2]);
        Permission::create(['name'=>'cursos.edit'])->syncRoles([$role1,$role2]);
        Permission::create(['name'=>'cursos.destroy'])->syncRoles([$role1]);
        Permission::create(['name'=>'cursos.update'])->syncRoles([$role1,$role2]);
        //***** Permisos    para subir archivos del CD*/
        Permission::create(['name'=>'cdfiles.index'])->syncRoles([$role1,$role3]);
        Permission::create(['name'=>'cdfiles.create'])->syncRoles([$role1,$role3]);
        Permission::create(['name'=>'cdfiles.edit'])->syncRoles([$role1,$role3]);
        Permission::create(['name'=>'cdfiles.destroy'])->syncRoles([$role1]);
        Permission::create(['name'=>'cdfiles.update'])->syncRoles([$role1,$role3]);


    }
}
