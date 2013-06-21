<?php

class SubCatTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$now = date('Y-m-d H:i:s');
		$subcategories = [
			[
				'id' => 1,
				'catid' => 1,
				'userid' => 1,
				'subcatTitle' => 'Rules',
				'subcatDescription' => 'Here are the rules',
				'subcatTotalposts' =>1,
				'created_at' => $now,
				'updated_at' => $now
			],
			[
				'id' => 2,
				'catid' => 1,
				'userid' => 1,
				'subcatTitle' => 'More Rules',
				'subcatDescription' => 'Another subcat',
				'subcatTotalposts' =>1,
				'created_at' => $now,
				'updated_at' => $now
			],
			[
				'id' => 3,
				'catid' => 3,
				'userid' => 1,
				'subcatTitle' => 'Buttons',
				'subcatDescription' => 'About buttons',
				'subcatTotalposts' =>1,
				'created_at' => $now,
				'updated_at' => $now
			],
			[
				'id' => 4,
				'catid' => 3,
				'userid' => 2,
				'subcatTitle' => 'Wells',
				'subcatDescription' => 'About wells',
				'subcatTotalposts' =>1,
				'created_at' => $now,
				'updated_at' => $now
			],
			[
				'id' => 5,
				'catid' => 4,
				'userid' => 2,
				'subcatTitle' => 'Models',
				'subcatDescription' => 'stupid things...',
				'subcatTotalposts' =>1,
				'created_at' => $now,
				'updated_at' => $now
			],
			[
				'id' => 6,
				'catid' => 4,
				'userid' => 1,
				'subcatTitle' => 'databases',
				'subcatDescription' => 'eloquent is weird',
				'subcatTotalposts' =>1,
				'created_at' => $now,
				'updated_at' => $now
			]
		];
		
		DB::table('subcategories')->insert($subcategories);

	}

}