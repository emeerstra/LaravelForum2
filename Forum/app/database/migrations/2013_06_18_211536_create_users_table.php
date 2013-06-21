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
			Schema::create('users', function($table) {
			//Auto incremental id
			$table->increments('id');
			
			//Varchars
			$table->string('username', 32);
			$table->string('email', 320);
			$table->string('password', 64);
			
			//user level
			$table->integer('userLevel');
			$table->string('profilePictureURL', 320);

			//create at and updated at DATETIME
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
