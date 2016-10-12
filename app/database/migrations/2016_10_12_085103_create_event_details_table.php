<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventDetailsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('event_details', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('event_id')->unsigned();
			$table->foreign('event_id')->references('id')->on('events');
			$table->string('event_name', 50);
			$table->string('event_type')->default('default');
			$table->date('event_date');
			$table->time('event_time');
			$table->string('event_organizer', 50);
			$table->string('event_email', 50)->nullable();
			$table->string('event_phone', 14);
			$table->string('event_location', 70);
			$table->string('event_slug', 100)->default('not_set');
			$table->string('event_description', 200);
			$table->string('event_detail', 200);
			$table->integer('event_template_id')->unsigned();
			$table->foreign('event_template_id')->references('id')->on('event_templates');
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
		Schema::drop('event_details');
	}

}
