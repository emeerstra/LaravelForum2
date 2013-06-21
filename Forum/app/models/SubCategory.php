<?php

class SubCategory extends Eloquent 
{
	protected $table = 'subcategories';

	public static function getValidate($input){
		$rules = array(
			'inputSubCatTitle' => 'Required|min:1',
			'inputSubCatDescription' => 'min:0',
			'inputSubCatPost' => 'Required'
		);
		
		return Validator::make($input, $rules);
	}

}