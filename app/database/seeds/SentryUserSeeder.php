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
			'name' => 'MemberName',
	        'mobile_no' => '98765432',
	        'activated' => 1,
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