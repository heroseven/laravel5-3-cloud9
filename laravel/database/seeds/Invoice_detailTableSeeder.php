<?php

use Illuminate\Database\Seeder;
use App\Models\Invoice_detail;

class Invoice_detailTableSeeder extends Seeder {

	public function run()
	{
		//DB::table('invoice_details')->delete();

		// 1
		Invoice_detail::create(array(
				'product_id' => 1,
				'invoice_id' => 1,
				'quantity' => 1
			));
	}
}