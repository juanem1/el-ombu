<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		$this->call('UsersTableSeeder');
        $this->call('GalleriesTableSeeder');
        $this->call('ImagesTableSeeder');
        $this->call('ComplexesTableSeeder');
        $this->call('OffersTableSeeder');
        $this->call('ProductsTableSeeder');
	}

}
