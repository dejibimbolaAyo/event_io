<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
			//this function create a user table
			$table->increments('id');
			$table->integer('role_id')->unsigned();
			$table->foreign('role_id')->references('id')->on('roles');
			$table->string('first_name', 30);
			$table->string('last_name', 30);
			$table->string('username', 32)->unique();
			$table->string('phone_no', 14);
			$table->string('email', 50)->unique();
			$table->char('password', 64);
			//this adds a remeber me token of varchar(100)
			$table->rememberToken();
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
		Schema::drop('users');
	}

}
