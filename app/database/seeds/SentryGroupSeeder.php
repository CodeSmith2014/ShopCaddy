<?php

class SentryGroupSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('groups')->delete();

		Sentry::getGroupProvider()->create(array(
			'name'        => 'Admin',
			));

		Sentry::getGroupProvider()->create(array(
			'name'        => 'Members',
			));

		Sentry::getGroupProvider()->create(array(
			'name'        => 'Users',
			));



	}

}