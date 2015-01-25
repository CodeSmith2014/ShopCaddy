<?php
class Order extends Eloquent{
	use SoftDeletingTrait;
	public function items(){
		return $this->hasMany('Item');
	}
}