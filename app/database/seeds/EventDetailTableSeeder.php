<?php

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
				'event_type' => $faker->word,
				'event_date' => $faker->date($format = 'd-m-Y', $min = 'now'),
				'event_time' => $faker->time($format = 'H:i:s', $min = 'now'),
				'event_organizer' => $faker->name,
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