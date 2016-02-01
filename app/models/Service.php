<?php

class Service extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'order' => 'required',
		'name' => 'required',
		'description' => 'required'
	);
}
