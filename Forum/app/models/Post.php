<?php

class Post extends Eloquent 
{
	protected $table = 'posts';

	public static function getValidate($input){
		$rules = array(
			'inputPostContent' => 'Required'
		);

		return Validator::make($input, $rules);
	}

}