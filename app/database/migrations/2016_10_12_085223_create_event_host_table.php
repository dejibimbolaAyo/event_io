<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventHostTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('event_host', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('event_id')->unsigned()->index();
			$table->foreign('event_id')->references('id')->on('events');
			$table->string('host_name', 50);
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
		Schema::drop('event_host');
	}

}
