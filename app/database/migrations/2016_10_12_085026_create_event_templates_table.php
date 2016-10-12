<?php
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
class CreateEventTemplatesTable extends Migration {
	/**
	* Run the migrations.
	*
	* @return void
	*/
	public function up()
	{
		Schema::create('event_templates', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('template_name', 15);
			$table->string('template_url', 100)->default('assets/img/templates/default.jpg')->nullable();
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
		Schema::drop('event_templates');
	}
}