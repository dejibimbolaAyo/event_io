<?php


class RoleTableSeeder extends Seeder {

	public function run()
	{
			Role::create(['id'=>'1','role_name'=>'admin']);
			Role::create(['id'=>'2','role_name'=>'user']);
			Role::create(['id'=>'3','role_name'=>'guest']);
		
	}

}