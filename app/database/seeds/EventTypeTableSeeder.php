<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class EventTypeTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 6) as $index)
		{
			EventType::create([
				'type' =>$faker->word,
			]);
		}
	}

}