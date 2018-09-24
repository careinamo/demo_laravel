<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Reset cached roles and permissions
        app()['cache']->forget('spatie.permission.cache');

		    // create permissions
        Permission::create(['name' => 'editar usuarios']);
        Permission::create(['name' => 'eliminar usuarios']);
        Permission::create(['name' => 'crear usuarios']);
        Permission::create(['name' => 'consultar usuarios']);
        
        // create roles and assign created permissions
       $role = Role::create(['name' => 'administrador']);
       $role->givePermissionTo(Permission::all());

       $role = Role::create(['name' => 'basico']);
       $role->givePermissionTo(['consultar usuarios']);
    }
}
