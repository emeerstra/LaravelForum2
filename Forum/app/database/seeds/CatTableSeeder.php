<?php

class CatTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$now = date('Y-m-d H:i:s');
		$categories = [
			[
				'id' => 1,
				'catTitle' => 'Forum Rules',
				'catDescription' => 'Please check this out before using the forum',
				'catTotalTopics' =>0,
				'created_at' => $now,
				'updated_at' => $now
			],
			[
				'id' => 2,
				'catTitle' => 'Forum Bugs/Suggestions',
				'catDescription' => 'Please report any bugs or reply with suggestions here',
				'catTotalTopics' =>0,
				'created_at' => $now,
				'updated_at' => $now
			],
			[
				'id' => 3,
				'catTitle' => 'Twitter Bootstrap',
				'catDescription' => 'Discuss "all the things" about twitter bootstrap',
				'catTotalTopics' =>0,
				'created_at' => $now,
				'updated_at' => $now
			],
			[
				'id' => 4,
				'catTitle' => 'Laravel',
				'catDescription' => 'Post questions or helpful laravel tips here',
				'catTotalTopics' =>0,
				'created_at' => $now,
				'updated_at' => $now
			]
		];
		
		DB::table('categories')->insert($categories);

	}

}