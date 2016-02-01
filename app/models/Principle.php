<?php

class Principle extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'name'        => 'required',
		'description' => 'required',
		'order'       => 'required',
	);
	public function getOrderAttribute($value) {
		if (isset($value)) {return sprintf("%02d", $value);
		}
	}
}
