<?php

class UsersTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$now = date('Y-m-d H:i:s');
		$users = [
			[
				'username' => 'Eric',
				'email' => 'Eric@E.com',
				'password' => Hash::make('Eric'),
				'userLevel' => 10,
				'profilePictureURL' => '/images/ProfilePictures/yoshi.jpg',
				'created_at' => $now,
				'updated_at' => $now
			],
			[
				'username' => 'Tom',
				'email' => 'Tom@T.com',
				'password' => Hash::make('Tom'),
				'userLevel' => 10,
				'profilePictureURL' => '/images/ProfilePictures/emptyProfile.jpg',
				'created_at' => $now,
				'updated_at' => $now
			]
		];
		
		DB::table('users')->insert($users);
		//Eloquent::unguard();
		//$this->call('UserTableSeeder');
	}

}