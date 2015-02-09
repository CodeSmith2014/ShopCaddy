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

			'email'    => 'member',
			'password' => 'member',
			'first_name' => 'MemberFirstName',
			'last_name' => 'MemberLastName',
			'activated' => 1,
			));

		Sentry::getUserProvider()->create(array(
			'email'    => 'admin',
			'password' => 'admin',
			'first_name' => 'AdminFirstName',
			'last_name' => 'AdminLastName',
			'activated' => 1,
			));

		Sentry::getUserProvider()->create(array(
			'email'    => 'user',
			'password' => 'user',
			'first_name' => 'UserFirstName',
			'last_name' => 'UserLastName',
			'activated' => 1,
			));
	    ));

		Sentry::getUserProvider()->create(array(
	        'email'    => 'member2',
	        'password' => 'member2',
	        'name' => 'MemberName2',
	        'mobile_no' => '98765432',
	        'activated' => 1,
	    ));

		Sentry::getUserProvider()->create(array(
	        'email'    => 'user',
	        'password' => 'user',
			'name' => 'UserName',
	        'mobile_no' => '98765432',
	        'activated' => 1,
	    ));

	}

}