<?php
use App\Models\EventAttendee;
// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class EventAttendeeTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 10) as $index)
		{
			EventAttendee::create([
				'event_id' => $index,
				'first_name' =>$faker->firstName,
				'last_name' =>$faker->lastName,
				'email' =>$faker->email,
				'phone_no' =>$faker->phoneNumber
			]);
		}
	}

}