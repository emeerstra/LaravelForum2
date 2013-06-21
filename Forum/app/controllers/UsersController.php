<?php

class UsersController extends \BaseController {

	protected $redirect;
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		Session::reflash();
		return View::make('users.userCreateForm');
	}
	
	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('users.userCreateForm');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//User::getValidate();
		$rules = array(
			'username' => 'Required|Between:3,32|Alpha',
			'email' => 'Required|Between:3,64',
			'password' => 'Required|AlphaNum|Between:4,64|Confirmed',
			'password_confirmation' => 'Required|AlphaNum|Between:4,64'
		);
		$v = Validator::make(Input::all(),$rules);

		if($v->passes())
		{
			$username = Input::get('createUsername');
			$password = Input::get('createPassword');
			$email = Input::get('createEmail');
			$now = date('Y-m-d H:i:s');
			User::insert( array(
					'username' => $username,
					'email' => $email,
					'password' => Hash::make($password),
					'userLevel' => 10,
					'profilePictureURL' => '/images/ProfilePictures/emptyProfile.jpg',
					'created_at' => $now,
					'updated_at' => $now
					)
			);
			if(Auth::attempt(array('username' => $username, 'password'=>$password))){
				return Redirect::to('/');
			}
			else{
				return Redirect::to('/') -> with ('flash_error', 'Could not log you in');
			}
		}
		else
		{
			return Redirect::to('/users')->withErrors($v->messages());
		}
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		echo 'in show';
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		return 'edit dog, id: ' . $id;
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		return 'update dog, id: ' . $id;
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		return 'dog destroyed with id: ' .$id;
	}

	
	//Here I attempt to add my own functions. More specifically a login function
	//----------------------------------------------------------------------------------------
	
	public function login() 
	{

		$username= $_POST['inputUsername'];
		$password = $_POST['inputPassword'];	
		$credentials = ['username' => $username, 'password'=>$password];
		if(Auth::attempt($credentials)){
			if(Session::has('redirect')){
				return Redirect::to(Session::get('redirect'));
			} else {
				return Redirect::to('/categories');
			}
		}
		else{
			return Redirect::to('/categories') -> with ('flash_error', 'Your username/password was incorrect');
		}
	}
	
	public function logout()
	{
		Auth::logout();
		return Redirect::to('/');
	}
	
	
}














