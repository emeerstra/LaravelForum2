<?php

class PostTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$now = date('Y-m-d H:i:s');
		$posts = [
			[
				'id' => 1,
				'catid' => 1,
				'subcatid' => 1,
				'userid' => 1,
				'postContent' => 'This is the first post',
				'created_at' => $now,
				'updated_at' => $now
			],
			[
				'id' => 2,
				'catid' => 1,
				'subcatid' => 2,
				'userid' => 2,
				'postContent' => 'This is the second post',
				'created_at' => $now,
				'updated_at' => $now
			],
			[
				'id' => 3,
				'catid' => 1,
				'subcatid' => 1,
				'userid' => 2,
				'postContent' => 'This is the third post',
				'created_at' => $now,
				'updated_at' => $now
			],
			[
				'id' => 4,
				'catid' => 3,
				'subcatid' => 3,
				'userid' => 1,
				'postContent' => 'This is the fourth post',
				'created_at' => $now,
				'updated_at' => $now
			],
			[
				'id' => 5,
				'catid' => 3,
				'subcatid' => 4,
				'userid' => 1,
				'postContent' => 'This is the fifth post',
				'created_at' => $now,
				'updated_at' => $now
			],
			[
				'id' => 6,
				'catid' => 3,
				'subcatid' => 3,
				'userid' => 2,
				'postContent' => 'This is the sixth post',
				'created_at' => $now,
				'updated_at' => $now
			],
			[
				'id' => 7,
				'catid' => 4,
				'subcatid' => 5,
				'userid' => 1,
				'postContent' => 'This is the seventh post',
				'created_at' => $now,
				'updated_at' => $now
			],
			[
				'id' => 8,
				'catid' => 4,
				'subcatid' => 5,
				'userid' => 2,
				'postContent' => 'This is the eigth post',
				'created_at' => $now,
				'updated_at' => $now
			]
		];
		
		DB::table('posts')->insert($posts);

	}

}