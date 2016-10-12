<?php
class EventImgTableSeeder extends Seeder {

	public function run()
	{

		foreach(range(1, 10) as $index)
		{
			EventImg::create([
				'event_id' => $index,
				'event_logo_url' => 'http://lorempixel.com/160/160/abstract',
				'event_logo_url' => 'http://lorempixel.com/1900/650/people'
			]);
		}
	}

}