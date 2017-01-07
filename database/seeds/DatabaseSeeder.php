<?php
use App\Models;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder {

	public function run()
	{
		Model::unguard();

		$this->call('UserTableSeeder');
		$this->command->info('User table seeded!');
		
		$this->call('ProductTableSeeder');
		$this->command->info('Product table seeded!');

		$this->call('InvoiceTableSeeder');
		$this->command->info('Invoice table seeded!');

		$this->call('CommerceTableSeeder');
		$this->command->info('Commerce table seeded!');
		
		$this->call('Invoice_detailTableSeeder');
		$this->command->info('Invoice_detail table seeded!');

	
	}
}