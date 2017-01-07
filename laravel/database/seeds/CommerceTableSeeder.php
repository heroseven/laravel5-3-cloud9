<?php

use Illuminate\Database\Seeder;
use App\Models\Commerce;

class CommerceTableSeeder extends Seeder {

	public function run()
	{
		//DB::table('commerce')->delete();

		// 1
		Commerce::create(array(
				'name' => 'tospiando',
				'description' => 'Organización de eventos deportivos',
				'status' => 1,
				'commerce_code' => 'test_C6DMyPIWfS3U',
				'api_key' => 'Dss+JfIj1p41waqQCSmQgskZqXbYOVP6XuHjOxDbjAg=',
				'user_id'=>1
			));
	}
}