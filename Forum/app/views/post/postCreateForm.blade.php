@extends('layouts.base')
@section('content')
	<div class="container-fluid">
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
			<div class="span9">
				<form class="form-horizontal" action="../posts" method="POST" >
					<fieldset> 
						<legend>Create Post</legend>
						<div class="control-group">
							<label class="control-label" for="post">Post Content</label>
							<div class="controls">
								<textarea class="input-xlarge xxlarge" id="post" rows="8" name="inputPostContent" > </textarea>
							</div>
						</div>
						<div class="form-actions">
							<button type"submit" class="btn"> Post </button>
						</div>
					</fieldset>
				</form>
				<div class="span3">
				
				</div>
			</div>
		</div>
   </div>
	
@stop