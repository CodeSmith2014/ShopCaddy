<?php

use Cartalyst\Sentry\Users\Eloquent\User as SentryModel;

class Member extends SentryModel {
	public function items(){
		return $this->hasMany('Item');
	}
}
