<body>
	<div class = "topnavbar">
		<div class="navbar-inner">
			<div class="container">
				<ul class="topnav pull-right" >

						@if (Auth::check())
							<li><div class="textNav margin-top">
								Logged in as {{Auth::user()->username }}
							</div></li>

							<li><a class="btn margin-top" href="/userlogout">Log out</a></li>
							<li><a class="btn margin-top" href ="/users/{{Auth::user()->id}}/edit" >
								<img src="/images/glyphicons/cogwhite2.png" height="20px" width="20px" >
							</a></li>
							
						

						@else
						
							@if (Session::has('flash_error'))
								<li><div class="textNav" style="background-color: red;">
									<div id ="flash_error">{{ Session::get('flash_error') }} </div>
								</div></li>
							
							@endif
						
							<form class="formClass" method="POST" action="/userlogin">
								<li><input type="text" class="input-medium" name="inputUsername" id="inputUserName" placeholder="Username" /></li>
								<li><input type="password" class="input-medium" name ="inputPassword" id="inputUserPassword" placeholder="Password" /></li>
								<li><button  class="btn"><i class="icon-user icon-white"></i>Log In</button></li>
							</form>
							<li><a class="btn" href="/users/create"><i class="icon-plus-sign icon-white"></i> Sign Up</a></li>
						
						@endif
					
						
				</ul>
			</div>
		</div>
	</div>
	
	<div class="banner">
		<div class="container">
			<img src="/images/dwlogo.png" style="height:90px;" />
		</div>
	</div>
	
	<div class="navbar">
		<div class="navbar-inner">
			<div class="container">
				<ul class="nav">

					@if(!isset($navChoice))
						<?php $navChoice=0; ?>
					@endif
					
					{{ ($navChoice == 0 ? '<li class="active">' : '<li>') }}
						<a class="btn" href="/categories"> Home </a> 
					</li>

					{{ ($navChoice == 1 ? '<li class="active">' : '<li>') }}
						<a class="btn" href="/about"> About </a> 
					</li>
					{{ ($navChoice == 2 ? '<li class="active">' : '<li>') }}
						<a class="btn" href="/contact"> Contact </a> 
					</li>
					{{ ($navChoice == 3 ? '<li class="active">' : '<li>') }}
						<a class="btn" href="/sources"> Sources </a> 
					</li>
				</ul>
			</div>
		</div>
	</div>
	<?php
	/*<!-- <div class="container breadcrumb">
		<div class="row-fluid">
			<div class="span12">
					<ul class="nav ulbreadcrumb">
						<li><a href="/categories">Forum  </a> </li>
						@if($breadcrumb > 0) 
								<li><p> > <a href= "/categories/{{$category->id}}/subcategories">{{$category-> catTitle}} </a>
								
								@if($breadcrumb > 1 ) 
								</li></p><li><p> > <a href="/categories/{{$category->id}}/subcategories/{{$subcategory->id}}/posts" >{{$subcategory -> subcatTitle}}</a> 
								@endif
									
								</p></li>
						@endif
						
					</ul>
			</div>
		</div>
	</div> -->*/
	?>