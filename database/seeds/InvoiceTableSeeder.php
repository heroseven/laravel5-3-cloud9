<?php

use Illuminate\Database\Seeder;
use App\Models\Invoice;

class InvoiceTableSeeder extends Seeder {

	public function run()
	{
		//DB::table('invoices')->delete();

		// 1
		Invoice::create(array(
				'first_name' => 'Eduardo',
				'last_name' => 'Jordán',
				'email' => 'eduardo@jordan',
				'description' => 'Detalle de venta',
				'amount' => 10,
				'address' => 'Lima Perú',
				'address_city' => 'Lima',
				'phone_number' => 954462139,
				'country_code' => 'PE',
				'status' => 1,
				'currency_code' => 'PEN'
			));
	}
}