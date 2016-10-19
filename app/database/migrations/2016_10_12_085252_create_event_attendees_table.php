<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventAttendeesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('event_attendees', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('event_id')->unsigned()->index();
			$table->foreign('event_id')->references('id')->on('events');
			$table->string('first_name', 30);
			$table->string('last_name', 30);
			$table->string('email', 40);
			$table->string('phone_no', 14);
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('event_attendees');
	}

}
