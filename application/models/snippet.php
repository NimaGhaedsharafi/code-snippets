<?php

class Snippet extends Eloquent 
{
	public static $timestamps = false;

	public static $rules = array('snippet' => 'required');

	public static function validate($input)
	{
		$v = Validator::make($input , static::$rules);
		$v->valid();

		return $v->errors->all();

	}
	
}