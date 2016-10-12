<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class EventSpeakerTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 10) as $index)
		{
			EventSpeaker::create([
				'event_id' => $index,
				'speaker_name' => $faker->name
			]);
		}
	}

}