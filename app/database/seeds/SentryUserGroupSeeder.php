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

		$memberUser = Sentry::getUserProvider()->findByLogin('member@member.com');
		$userUser = Sentry::getUserProvider()->findByLogin('user@user.com');
		
		$memberGroup = Sentry::getGroupProvider()->findByName('Members');
		$userGroup = Sentry::getGroupProvider()->findByName('Users');

	    # Assign the users to groups
	    $memberUser->addGroup($memberGroup);
	    $userUser->addGroup($userGroup);
	    
	}

}