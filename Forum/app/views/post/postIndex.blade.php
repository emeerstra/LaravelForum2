@extends('layouts.base')

@section('content')
	<div class="container-fluid">
		<div class="row-fluid">
			<div class="span2 offset10">

				<a class="btn pull-right" href="posts/create"> <i class="icon-plus icon-white"></i> Reply </a>

			</div>
		</div>
		
		<div class="row-fluid">
			<div class="span12">
				<div class="tableHeaderRow">
					<h4> {{$subcategory->subcatTitle}}</h4>
				</div>
				<div class="allTableRows">
				
					@foreach($postsArray as $post)
						<?php $user = User::find($post->userid) ?>
						<div class="postRow">
							<div class="postHeaderRow">
								{{ $user->username }}
								
							</div>
						
							<div class="postUser">
								<div class="content">
									<p>User Joined: <br> {{ $user->created_at }}</p>
									<p>User Email: {{ $user->email }}</p>
									<p ><img src="{{ $user->profilePictureURL }}" height="60px" width="60px" ></p>
								</div>
							</div>
							<div class="postContent">
								<p class="content">{{$post->postContent}}</p>
							</div>
						</div>
					@endforeach
				</div>
			</div>
		</div>

		<div class="row-fluid">
			<div class="span12">
				<form class="form-horizontal" action="posts" method="POST" >
					<fieldset> 				
							<div class="control-group">
								<label class="control-label" for="post">Quick Reply</label>
								<div class="controls">
									<textarea class="input-xlarge xxxlarge" id="post" rows="3" name="inputPostContent" > </textarea>
									<button type"submit" class="btn quickReplySubmitBtn"> Post </button>
								</div>
							</div>	
					</fieldset>
				</form>
			</div>
		</div>
	</div>
@stop 