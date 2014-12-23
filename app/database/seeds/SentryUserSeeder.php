<?php

class SentryUserSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('users')->delete();

		Sentry::getUserProvider()->create(array(
	        'email'    => 'member@member.com',
	        'password' => 'member',
	        'first_name' => 'MemberFirstName',
	        'last_name' => 'MemberLastName',
	        'activated' => 1,
	    ));

		Sentry::getUserProvider()->create(array(
	        'email'    => 'user@user.com',
	        'password' => 'user',
	        'first_name' => 'UserFirstName',
	        'last_name' => 'UserLastName',
	        'activated' => 1,
	    ));
	    
	}

}