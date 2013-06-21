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
				<form class="form-horizontal" action="../subcategories" method="POST" >
					<fieldset> 
						<legend>Create SubCategory/Topic in Category : {{$category->catTitle}} </legend>
							<div class="control-group">
								<label class="control-label" for="title">Title*</label>
								<div class="controls">
									<input type="text" class="input-xlarge" id="title" name="inputSubCatTitle" >
								</div>
							</div>
							<div class="control-group">
								<label class="control-label" for="description">Description</label>
								<div class="controls">
									<input type="text" class="input-xlarge" id="descripition" name="inputSubCatDescription" placeholder="Optional">
								</div>
							</div>
							<div class="control-group">
								<label class="control-label" for="post">Post*</label>
								<div class="controls">
									<textarea class="input-xlarge" id="post" rows="4" name="inputSubCatPost" > </textarea>
								</div>
							</div>
							<div class="form-actions">
								<button type"submit" class="btn"> Create </button>
							</div>
					</fieldset>
				</form>
				<div class="span3">
				
				</div>
			</div>
		</div>
   </div>
	
@stop