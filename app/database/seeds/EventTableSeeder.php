<?php

class EventTableSeeder extends Seeder {

	public function run()
	{
		foreach(range(1, 10) as $index)
		{
			Even_t::create(['user_id'=>$index]);
		}
	}

}