<?php

class SentryUserGroupSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('users_groups')->delete();

		$admin = Sentry::getUserProvider()->findByLogin('admin');
		$member = Sentry::getUserProvider()->findByLogin('member');
		$user = Sentry::getUserProvider()->findByLogin('user');
		
		$adminGroup = Sentry::getGroupProvider()->findByName('Admin');
		$memberGroup = Sentry::getGroupProvider()->findByName('Members');
		$userGroup = Sentry::getGroupProvider()->findByName('Users');

	    # Assign the users to groups
	    $admin->addGroup($adminGroup);
		$member->addGroup($memberGroup);
		$user->addGroup($userGroup);

	}

}