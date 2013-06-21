<?php

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface 
{
	protected $fillable = array('id','username', 'email', 'password', 'userLevel', 'create_at','updated_at');
	protected $table = 'users';
	
	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password');
	
	/**
	 * Get the unique identifier for the user.
	 *
	 * @return mixed
	 */
	public function getAuthIdentifier()
	{
		return $this->getKey();
	}

	/**
	 * Get the password for the user.
	 *
	 * @return string
	 */
	public function getAuthPassword()
	{
		return $this->password;
	}

	/**
	 * Get the e-mail address where password reminders are sent.
	 *
	 * @return string
	 */
	public function getReminderEmail()
	{
		return $this->email;
	}

	public function static getValidate($input) {
		/*$rules = array(
			'username' => 'Required|Between:3,32|AlphaNum',
			//'email' => 'Required|Betweeen:3,64|Email|Unique:users',
			'email' => 'Required|Between 3,64',
			'password' => 'Required|AlphaNum|Between:4,64|Confirmed',
			'password_confirmation' => 'Required|AlphaNumb|Between:4,64'
		);
		
		return Validator::make($input, $rules);*/
		//echo 'son of a bitch';
	}

}