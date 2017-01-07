<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class UserTableSeeder extends Seeder {

	public function run()
	{
		//DB::table('users')->delete();

		// 1
		User::create(array(
				'name' => 'Christopher',
				'surname' => 'Vargas',
				'email' => 'sofia@valiente.com',
				'password_temp' => Hash::make('actitud'),
				'password' => Hash::make('actitud'),
				'status' => 1,
				'remember_token' => Hash::make('actitud')
			));

		// 2
		User::create(array(
				'name' => 'Pedro',
				'surname' => 'Salinas',
				'email' => 'pedro@salinas.com',
				'password_temp' => Hash::make('actitud'),
				'password' => Hash::make('actitud'),
				'status' => 1,
				'remember_token' => Hash::make('actitud')
			));
	}
}