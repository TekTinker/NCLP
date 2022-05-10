<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PermissionToRoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$role = Role::where('name', 'PD')->first();
		$permissions = Permission::all();
		$role->syncPermissions($permissions);

		$role = Role::where('name', 'PM')->first();
		$role->syncPermissions($permissions);

		$role = Role::where('name', 'VT')->first();

		$role->givePermissionTo('stc_index');
		$role->givePermissionTo('stc_view');
		$role->givePermissionTo('stc_assign');
		$role->givePermissionTo('stc_edit');
		$role->givePermissionTo('cl_admin');
    }
}
