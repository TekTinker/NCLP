<?php

use Illuminate\Database\Seeder;
use NCLP\Models\STC;
use NCLP\User;

class STCsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $stc = new STC();
        $stc->uid = '1';
        $stc->name = 'Jalna 1';
        $stc->address = 'Jalna';
		$stc->taluka = 'Jalna';
		$stc->district = 'Jalna';
		$stc->state = 'MH';
		$stc->save();
		$stc->users()->attach(User::find(2));

		$stc = new STC();
		$stc->uid = '2';
		$stc->name = 'Abad';
		$stc->address = 'Abad';
		$stc->taluka = 'Abad';
		$stc->district = 'Abad';
		$stc->state = 'MH';
		$stc->save();
		$stc->users()->attach(User::find(3));

		$stc = new STC();
		$stc->uid = '3';
		$stc->name = 'Jalna 2';
		$stc->address = 'Jalna 2';
		$stc->taluka = 'Jalna 2';
		$stc->district = 'Jalna 2';
		$stc->state = 'MH';
		$stc->save();
		$stc->users()->attach(User::find(2));
    }
}
