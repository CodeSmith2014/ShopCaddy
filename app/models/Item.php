<?php
class Item extends Eloquent{
	use SoftDeletingTrait;
	public function member(){
		return $this->belongTo('Member');
	}
}