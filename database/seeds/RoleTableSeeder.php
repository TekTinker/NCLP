<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

		app()['cache']->forget('spatie.role.cache');

		Role::create(['name' => 'User']);
		Role::create(['name' => 'PD']);
		Role::create(['name' => 'PM']);
		Role::create(['name' => 'VT']);
		Role::create(['name' => 'Teacher']);
    }
}
