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

		$memberUser = Sentry::getUserProvider()->findByLogin('member');
		$memberUser2 = Sentry::getUserProvider()->findByLogin('member2');
		$userUser = Sentry::getUserProvider()->findByLogin('user');
		
		$memberGroup = Sentry::getGroupProvider()->findByName('Members');
		$userGroup = Sentry::getGroupProvider()->findByName('Users');

	    # Assign the users to groups
		$memberUser->addGroup($memberGroup);
		$memberUser2->addGroup($memberGroup);
		$userUser->addGroup($userGroup);

	}

}