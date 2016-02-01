<?php

class Project extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'order' => 'required',
		'name' => 'required',
		'description' => 'required'
	);
}
