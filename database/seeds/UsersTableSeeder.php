<?php

use Illuminate\Database\Seeder;
use \NCLP\User;
use Spatie\Permission\Models\Role;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$user = new User();
    	$user->name = "Admin";
    	$user->email = "admin@gmail.com";
    	$user->password = bcrypt('admin');
		$user->dob = null;
		$user->education = null;
		$user->mobile =null;
		$user->pan =null;
		$user->aadhar =null;
		$user->address =null;
		$user->ward =null;
		$user->taluka =null;
		$user->district =null;
		$user->state =null;
		$user->cast =null;
		$user->category =null;
    	$user->save();
		$user->assignRole('PD');
		$user->givePermissionTo('login');

		$user = new User();
		$user->name = "Vocational Teacher";
		$user->email = "vt@gmail.com";
		$user->password = bcrypt('admin');
		$user->dob = null;
		$user->education = null;
		$user->mobile =null;
		$user->pan =null;
		$user->aadhar =null;
		$user->address =null;
		$user->ward =null;
		$user->taluka =null;
		$user->district =null;
		$user->state =null;
		$user->cast =null;
		$user->category =null;
		$user->save();
		$user->assignRole('VT');
		$user->givePermissionTo('login');

		$user = new User();
		$user->name = "Vocational Teacher 2";
		$user->email = "vt2@gmail.com";
		$user->password = bcrypt('admin');
		$user->dob = null;
		$user->education = null;
		$user->mobile = null;
		$user->pan =null;
		$user->aadhar =null;
		$user->address =null;
		$user->ward =null;
		$user->taluka =null;
		$user->district =null;
		$user->state =null;
		$user->cast =null;
		$user->category =null;
		$user->save();
		$user->assignRole('VT');
		$user->givePermissionTo('login');


		$user = new User();
		$user->name = "Teacher";
		$user->email = "t@gmail.com";
		$user->password = bcrypt('admin');
		$user->dob = '';
		$user->education = '';
		$user->mobile ='';
		$user->pan ='';
		$user->aadhar ='';
		$user->address ='';
		$user->ward ='';
		$user->taluka ='';
		$user->district ='';
		$user->state ='';
		$user->cast ='';
		$user->category ='';
		$user->save();
		$user->assignRole('Instructor');
		$user->givePermissionTo('login');

    }
}
