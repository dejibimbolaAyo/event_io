<?php
use App\Models\EventDetail;
// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class EventDetailTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 10) as $index)
		{
			EventDetail::create([
				'event_id' => $index,
				'event_name' => $faker->sentence($nbWords = 2, $variableNbWords = true),
				'event_type_id' => mt_rand(1, 5),
				'event_time_from' => $faker->dateTime($min = 'now', $timezone = date_default_timezone_get()),
				'event_time_to' => $faker->dateTime($max = '10years', $timezone = date_default_timezone_get()),
				'event_email' => $faker->email,
				'event_phone' => $faker->phoneNumber,
				'event_location' => $faker->address,
				'event_slug' =>$faker->slug,
				'event_description' => $faker->sentence($nbWords = 10, $variableNbWords = true),
				'event_detail' => $faker->sentence($nbWords = 10, $variableNbWords = true),
				'event_template_id' => $index
			]);
		}
	}

}