@extends('layouts.base')
@section('content')
	<div class="container-fluid">
		<div class="row-fluid">		
			@if (Session::has('flash_error_guest'))
				<div class="textNav" style="background-color: red; margin-top: 10px;">
					<div id ="flash_error">{{ Session::get('flash_error_guest') }} </div>
				</div>	
				<?php Session::forget('flash_error_guest'); ?>
			@endif
		</div>
		<div class="row-fluid">		
			@if ( $errors->count() > 0 )
    		  <p>The following errors have occurred:</p>
      			<ul>
        			@foreach( $errors->all() as $message )
          				<li>{{ $message }}</li>
        			@endforeach
      			</ul>
    		@endif
		</div>
		<div class="row-fluid">
			<div class="span6">
				<form class="form-horizontal" action="/users" method="POST" >
					<fieldset> 
						<legend>Sign up a new user</legend>
							<div class="control-group">
								<label class="control-label" for="createusername">Username*</label>
								<div class="controls">
									<input type="text" class="input-xlarge" id="createusername" name="createUsername" >
								</div>
							</div>
							<div class="control-group">
								<label class="control-label" for="createemail">Email*</label>
								<div class="controls">
									<input type="text" class="input-xlarge" id="createemail" name="createEmail" >
								</div>
							</div>
							<div class="control-group">
								<label class="control-label" for="createpassword">Password*</label>
								<div class="controls">
									<input type="password" class="input-xlarge" id="createpassword" name="createPassword" >
								</div>
							</div>
							<div class="control-group">
								<label class="control-label" for="confirmpassword">Confirm Password*</label>
								<div class="controls">
									<input type="password" class="input-xlarge" id="confirmpassword" name="createPassword_confirmation" >
								</div>
							</div>
							<div class="form-actions">
								<button type="submit" class="btn"> Create </button>
							</div>
					</fieldset>
				</form>
			</div>
			<div class="span5 offset1">
				<form class="form-inline" action="/userlogin" method="POST" >
					<fieldset> 
						<legend>Login </legend>
							<div class="control-group">
								<label class="control-label" for="username">Username</label>
								<div class="controls">
									<input type="text" class="input-xlarge" id="username" name="inputUsername" >
								</div>
							</div>
							<div class="control-group">
								<label class="control-label" for="password">Password</label>
								<div class="controls">
									<input type="password" class="input-xlarge" id="password" name="inputPassword" >
								</div>
							</div>
							<div class="form-actions">
								<button type="submit" class="btn"> Login </button>
							</div>
					</fieldset>
				</form>
			</div>
		</div>
   </div>
	
@stop