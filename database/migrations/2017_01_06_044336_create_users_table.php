<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersTable extends Migration {

	public function up()
	{
		Schema::create('users', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name', 50);
			$table->string('surname', 50);
			$table->string('email', 100)->unique();
			$table->string('password_temp', 64);
			$table->string('password', 64);
			$table->tinyInteger('status');
			$table->string('remember_token', 60);
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('users');
	}
}