<?php

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductTableSeeder extends Seeder {

	public function run()
	{
		//DB::table('products')->delete();

		// Ulima vs Catolica
		Product::create(array(
				'name' => 'Ulima vs Catolica',
				'price' => 10,
				'user_id' => 1,
				'stock' => 50,
				'description' => 'Enfrentamiento Ulima vs Catolica',
				'status' => 1
			));

		// San Marcos vs Uni
		Product::create(array(
				'name' => 'San Marcos vs Uni',
				'price' => 10,
				'user_id' => 1,
				'stock' => 50,
				'description' => 'Enfrentamiento San Marcos vs Uni',
				'status' => 1
			));
	}
}