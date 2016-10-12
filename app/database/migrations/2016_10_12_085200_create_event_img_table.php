<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventImgTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('event_img', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('event_id')->unsigned();
			$table->foreign('event_id')->references('id')->on('events');
			$table->string('event_logo_url', 100)->default('assets/img/logo.jpg')->nullable();
			$table->string('event_banner_url', 100)->default('assets/img/banner.jpg')->nullable();
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
		Schema::drop('event_img');
	}

}
