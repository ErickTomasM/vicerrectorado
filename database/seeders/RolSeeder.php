<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Admin = Role::create(['name' => 'Administrador']);
        $Facu = Role::create(['name' => 'Facultad']);
        $Carr = Role::create(['name' => 'Carrera']);
        
        Permission::create(['name' => 'docentes.index'])->syncRoles([$Admin, $Carr, $Facu]);
        Permission::create(['name' => 'docentes.create'])->syncRoles([$Admin, $Carr]);
        Permission::create(['name' => 'docentes.edit'])->syncRoles([$Admin, $Carr]);
        Permission::create(['name' => 'docentes.delete'])->syncRoles([$Admin, $Carr]);

        Permission::create(['name' => 'extraordinarios.index'])->syncRoles([$Admin, $Carr, $Facu]);
        Permission::create(['name' => 'extraordinarios.create'])->syncRoles([$Admin, $Carr]);
        Permission::create(['name' => 'extraordinarios.edit'])->syncRoles([$Admin, $Carr]);
        Permission::create(['name' => 'extraordinarios.delete'])->syncRoles([$Admin, $Carr]);

        Permission::create(['name' => 'titulares.index'])->syncRoles([$Admin, $Carr, $Facu]);
        Permission::create(['name' => 'titulares.create'])->syncRoles([$Admin, $Carr]);
        Permission::create(['name' => 'titulares.edit'])->syncRoles([$Admin, $Carr]);
        Permission::create(['name' => 'titulares.delete'])->syncRoles([$Admin, $Carr]);

        Permission::create(['name' => 'designacions.index'])->syncRoles([$Admin, $Carr, $Facu]);
        Permission::create(['name' => 'designacions.create'])->syncRoles([$Admin, $Carr]);
        Permission::create(['name' => 'designacions.edit'])->syncRoles([$Admin, $Carr]);
        Permission::create(['name' => 'designacions.delete'])->syncRoles([$Admin, $Carr]);

        
    }
}
