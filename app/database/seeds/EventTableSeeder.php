<?php
use App\Models\Even_t;
class EventTableSeeder extends Seeder {

	public function run()
	{
		foreach(range(1, 10) as $index)
		{
			Even_t::create(['user_id'=>$index,
							'slug' => str_random(64)
				]);
		}
	}

}