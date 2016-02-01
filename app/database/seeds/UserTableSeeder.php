<?php

class UserTableSeeder extends Seeder {

	public function run() {
		// Uncomment the below to wipe the table clean before populating
		DB::table('users')->truncate();

		$user           = new User;
		$user->name     = 'Jorge Saud';
		$user->username = 'giorgiosaud';
		$user->email    = 'jorgelsaud@gmail.com';
		$user->password = Hash::make('zonapronet');
		$user->save();
		$user= new User;
		$user->name     = 'Maria Patricia';
		$user->username = 'pfuster';
		$user->email    = 'pfuster@fusterpl.com';
		$user->password = Hash::make('fusterpl');
		$user->save();

	}

}
