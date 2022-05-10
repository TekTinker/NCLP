<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		app()['cache']->forget('spatie.permission.cache');

		Permission::create(['name' => 'admin']);

		Permission::create(['name' => 'login']);



		Permission::create(['name' => 'user_admin']);
		Permission::create(['name' => 'user_approve']);
		Permission::create(['name' => 'user_destroy']);
		Permission::create(['name' => 'user_assign']);
		Permission::create(['name' => 'user_index']);

		Permission::create(['name' => 'vt_admin']);
		Permission::create(['name' => 'vt_approve']);
		Permission::create(['name' => 'vt_destroy']);
		Permission::create(['name' => 'vt_assign']);
		Permission::create(['name' => 'vt_index']);


		Permission::create(['name' => 'stc_admin']);
		Permission::create(['name' => 'stc_index']);
		Permission::create(['name' => 'stc_view']);
		Permission::create(['name' => 'stc_edit']);
		Permission::create(['name' => 'stc_delete']);
		Permission::create(['name' => 'stc_create']);
		Permission::create(['name' => 'stc_assign']);


		Permission::create(['name' => 'cl_admin']);
		Permission::create(['name' => 'cl_index']);
		Permission::create(['name' => 'cl_view']);
		Permission::create(['name' => 'cl_edit']);
		Permission::create(['name' => 'cl_delete']);
		Permission::create(['name' => 'cl_create']);


		Permission::create(['name' => 'student_admin']);
		Permission::create(['name' => 'student_index']);
		Permission::create(['name' => 'student_view']);
		Permission::create(['name' => 'student_edit']);
		Permission::create(['name' => 'student_delete']);
		Permission::create(['name' => 'student_create']);

        Permission::create(['name' => 'gallery_index']);
        Permission::create(['name' => 'gallery_add']);
        Permission::create(['name' => 'gallery_delete']);


    }
}