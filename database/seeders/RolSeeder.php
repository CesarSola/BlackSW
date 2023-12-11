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
     */
    public function run(): void
    {
        $superadmin = Role::create(['name' => 'super-admin']);
        $admin = Role::create(['name' => 'admin']);
        $user = Role::create(['name' => 'user']);
        $blogg = Role::create(['name' => 'blogg']);

        // Crear permisos
        $ver = Permission::create(['name' => 'ver-rol']);
        $crear = Permission::create(['name' => 'crear-rol']);
        $editar = Permission::create(['name' => 'editar-rol']);
        $delete = Permission::create(['name' => 'borrar-rol']);

        // Asignar permisos a roles
        $superadmin->givePermissionTo($ver, $crear, $editar, $delete);
        $admin->givePermissionTo($editar,$ver,$delete);
        $user->givePermissionTo($ver,$editar);
        $blogg->givePermissionTo($ver);
        
    }
    
}
