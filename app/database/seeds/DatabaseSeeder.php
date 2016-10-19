<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{

		Eloquent::unguard();
		$this->call('RoleTableSeeder');
		$this->call('UserTableSeeder');
		$this->call('EventTemplateTableSeeder');
		$this->call('EventTableSeeder');
		$this->call('EventTypeTableSeeder');
		$this->call('EventDetailTableSeeder');
		$this->call('EventHostTableSeeder');
		$this->call('EventSpeakerTableSeeder');
		$this->call('EventImgTableSeeder');
		$this->call('EventAttendeeTableSeeder');

		// $this->call('UserTableSeeder');
	}

}
