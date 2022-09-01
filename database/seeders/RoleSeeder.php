<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        $empleado = Role::create(['name' => 'Empleados de campo']);
        $invitado = Role::create(['name' => 'invitado']);
        $almacenista = Role::create(['name' => 'Almacenista']);
        $superAdmin = Role::create(['name' => 'Super admin']);

        Permission::create(['name' => 'Dashboard'])->syncRoles($empleado, $invitado, $almacenista, $superAdmin);
    
    Permission::create(['name' => 'Inicio cultivos'])->syncRoles($empleado, $superAdmin);
    Permission::create(['name' => 'Ver cultivos'])->syncRoles($empleado, $superAdmin);
    Permission::create(['name' => 'Editar cultivos'])->syncRoles($empleado, $superAdmin);
    Permission::create(['name' => 'Crear cultivos'])->syncRoles($empleado, $superAdmin);
    Permission::create(['name' => 'Eliminar cultivos'])->syncRoles($empleado, $superAdmin);

    Permission::create(['name' => 'Inicio insumos'])->syncRoles($empleado, $superAdmin, $almacenista);
    Permission::create(['name' => 'Ver insumos'])->syncRoles($empleado, $superAdmin, $almacenista);
    Permission::create(['name' => 'Editar insumos'])->syncRoles($empleado, $superAdmin, $almacenista);
    Permission::create(['name' => 'Crear insumos'])->syncRoles($empleado, $superAdmin, $almacenista);
    Permission::create(['name' => 'Eliminar insumos'])->syncRoles($empleado, $superAdmin, $almacenista);

    Permission::create(['name' => 'Inicio actividades'])->syncRoles($empleado, $superAdmin);
    Permission::create(['name' => 'Ver actividades'])->syncRoles($empleado, $superAdmin);
    Permission::create(['name' => 'Editar actividades'])->syncRoles($empleado, $superAdmin);
    Permission::create(['name' => 'Crear actividades'])->syncRoles($empleado, $superAdmin);
    Permission::create(['name' => 'Eliminar actividades'])->syncRoles($empleado, $superAdmin);

    Permission::create(['name' => 'Inicio fases'])->syncRoles($empleado, $superAdmin);
    Permission::create(['name' => 'Ver fases'])->syncRoles($empleado, $superAdmin);
    Permission::create(['name' => 'Editar fases'])->syncRoles($empleado, $superAdmin);
    Permission::create(['name' => 'Crear fases'])->syncRoles($empleado, $superAdmin);
    Permission::create(['name' => 'Eliminar fases'])->syncRoles($empleado, $superAdmin);

    Permission::create(['name' => 'Inicio costos'])->syncRoles($empleado, $superAdmin);
    Permission::create(['name' => 'Ver costos'])->syncRoles($empleado, $superAdmin);
    Permission::create(['name' => 'Editar costos'])->syncRoles($empleado, $superAdmin);
    Permission::create(['name' => 'Crear costos'])->syncRoles($empleado, $superAdmin);
    Permission::create(['name' => 'Eliminar costos'])->syncRoles($empleado, $superAdmin);
    }
}
