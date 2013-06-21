@extends('layouts.base')


	<?php
	/*
	if(isset($_SESSION['CurrentCatID'])) $_SESSION['CurrentCatID'] = null;
	if(isset($_SESSION['CurrentCatTitle'])) $_SESSION['CurrentCatTitle'] = null;
	if(isset($_SESSION['CurrentSubCatID'])) $_SESSION['CurrentSubCatID'] = null;
	if(isset($_SESSION['CurrentSubCatTitle'])) $_SESSION['CurrentSubCatTitle'] = null;
	*/
	?>


@section('content')
	<div class="container-fluid">
		<div class="row-fluid">
		
		
			{{------------------------About Forum-----------------------------}}
			<div class="span9 aboutForum">
				<div class="tableHeaderRow">
					<h4> About Forum</h4>
				</div>
				<div class="allTableRows">
				
					@foreach($topcategoriesArray as $category)
						<div class="tableRow">
							<div class="tableContentRow">
								<div class="tableContent">
									
									<a class="" href="/categories/{{$category->id}}/subcategories" > <h5>{{$category->catTitle}} </h5> </a>
									<p class="content">{{$category->catDescription}}</p>
									
								</div>
							</div>
							<div class="tableInfoRow">
								<div class="tableContent">
									<p class="infoContent"> Topics:{{$category->catTotalTopics}}</p>
								</div>
							</div>
						</div>
					@endforeach
				</div>
			</div>	
			{{-----------------------End of About Forum--------------------}}
			
			
			{{-----------Start of User Profile and Recent Posts------------}}
			<div class="span3">
				@if (!Auth::check())
				
					<div class="profileUserHeader">
						<h4>Not Logged In</h4>
					</div>
					<div class="profileAllRows">
						<div class="profileContainer">
							<div class="profileRow" style="display: block" >
								<p>-You are not logged in</p>
								<p>-You are free to browse, but will need to login to post</p>
							</div>
						</div>
						<div class="profileEndRow">
							
						</div>
					</div>	
					
				@else
				
					<div class="profileUserHeader">
						<h4>User: {{ Auth::user()->username }}</h4>
					</div>
					
					<div class="profileAllRows ">
						<div id="1" class="profileContainer active">
							<div class="profileHeader " id="profilePicture" onclick="profileHeaderOnClick(this)">
								<div class="profileHeaderContent">
									<img id ="arrow" src="/images/glyphicons/downarrow.png" > Profile Picture
								</div>
							</div>
							<div id="profilePictureRow" class="profileRow">
								<p><img  src="{{ Auth::user()->profilePictureURL }}"  id ="profilePicture" width="70px" height="70px"></p>
							</div>
						</div>	
						
						
						<div id ="2" class="profileContainer ">	
							<div class="profileHeader" id="profileAbout" onclick="profileHeaderOnClick(this)">
								<div class="profileHeaderContent">
									<img id ="arrow2" src="/images/glyphicons/rightarrow.png"  > About/Contact
								</div>
							</div>
							<div class="profileRow">
								UserName: {{ Auth::user()->username }} <br>
								Date Joined: {{ Auth::user()->created_at }}<br>
								UserEmail: {{ Auth::user()->email }} <br>
							</div>
						</div>	
						
						
						<div id="3" class="profileContainer">	
							<div class="profileHeader" id="profileMessages" onclick="profileHeaderOnClick(this)">
								<div class="profileHeaderContent">
									<img id ="arrow3" src="/images/glyphicons/rightarrow.png" width="12px" height="12px"  > Messages
								</div>
							</div>
							<div class="profileRow">
								<p>Here in 3</p>
							</div>	
						</div>	
						
						<div class="profileEndRow">
							
						</div>
					</div>
				@endif
				
				<div class="span12">
				<?php 
					//include 'Queries/forumRecentPostQuery.php';
				?>
				</div>
			</div>
			{{------------End of User Profile and Recent posts-------------}}	
				
			
			{{------------------------Forum Topics-------------------------}}		
			<div class="span9">
				<div class="tableHeaderRow">
					<h4> Forum Topics </h4>
					</div>
				<div class="allTableRows">
				@foreach($bottomcategoriesArray as $category)
					<div class="tableRow">
						<div class="tableContentRow">
							<div class="tableContent">
								<a class="" href="/categories/{{$category->id}}/subcategories" > <h5>{{$category->catTitle}} </h5> </a>
								<p class="content">{{$category->catDescription}}</p>
								
							</div>
						</div>
						<div class="tableInfoRow">
							<div class="tableContent">
								<p class="infoContent"> Topics:{{$category->catTotalTopics}}</p>
							</div>
						</div>
					</div>
				@endforeach
				</div>
			</div>
			{{-----------------------End of Forum Topics--------------------}}
		</div>
	</div>
	
	<script>
	function profileHeaderOnClick(elem) {
		var profileHeaderImage = document.getElementById(elem.id).firstElementChild.firstElementChild;
		var profileContainer = document.getElementById(elem.parentNode.id);

		if(profileHeaderImage.src == "myproject/images/glyphicons/rightarrow.png"){
			profileHeaderImage.src="/images/glyphicons/downarrow.png";
			profileContainer.classList.add("active");

		}
		else{
			profileHeaderImage.src="/images/glyphicons/rightarrow.png";
			profileContainer.classList.remove("active");
		}
	}
	</script>
@stop