<?php
use App\Models\EventHost;
// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class EventHostTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 3) as $index)
		{
			EventHost::create([
				'event_id' => $index,
				'host_name' => $faker->name
			]);
		}
	}

}