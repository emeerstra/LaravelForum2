@section('content3')
@include('../include/forumDBConnect')

<?php
	if(!isset($_SESSION['signed_in'])){
		echo 
			'<div class="profileUserHeader">
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
			';
	}
	else if(!$_SESSION['signed_in']){
		echo '<p>Session is made but there is no variable in it</p>';
	}
	
	//If we make it this far then a session variable exists and is not empty
	else {
		$sql = "SELECT * FROM `users` WHERE UserID = " .mysql_real_escape_string($_SESSION['UserID']) ;
		
		$result1 = mysql_query($sql);
		
		if(!$result1) { 
			echo 'No display for you'; 
		}
		else {
			if(mysql_num_rows($result1)==0){
				echo 'No rows yet';
			}
			else {
				echo 
					'<div class="profileUserHeader">
						<h4>User: ' . $_SESSION["UserName"] . '</h4>
					</div>
					
					<div class="profileAllRows ">
						<div id="1" class="profileContainer active">
							<div class="profileHeader " id="profilePicture" onclick="profileHeaderOnClick(this)">
								<div id="hey" class="profileHeaderContent">
									<img id ="arrow" src="images/glyphicons/downarrow.png" > Profile Picture
								</div>
							</div>
							<div id="profilePictureRow" class="profileRow">
								<p><img  src="'. $_SESSION["UserProfilePictureURL"] .'" id ="profilePicture" width="70px" height="70px"></p>
							</div>
						</div>	
						
						
						<div id ="2" class="profileContainer ">	
							<div class="profileHeader" id="profileAbout" onclick="profileHeaderOnClick(this)">
								<div class="profileHeaderContent">
									<img id ="arrow2" src="images/glyphicons/rightarrow.png"  > About/Contact
								</div>
							</div>
							<div class="profileRow">
								UserName: '. $_SESSION['UserName'] . ' <br>
								Date Joined: ' . $_SESSION['UserDate'] .' <br>
								UserEmail: ' . $_SESSION['UserEmail'] .' <br>
							</div>
						</div>	
						
						
						<div id="3" class="profileContainer">	
							<div class="profileHeader" id="profileMessages" onclick="profileHeaderOnClick(this)">
								<div class="profileHeaderContent">
									<img id ="arrow3" src="images/glyphicons/rightarrow.png" width="12px" height="12px"  > Messages
								</div>
							</div>
							<div class="profileRow">
								<p>Here in 3</p>
							</div>	
						</div>	
						
						<div class="profileEndRow">
							
						</div>
					</div>
					
					
					';
			}
		}
	}	
?>
	<script>
		function profileHeaderOnClick(elem) {
			var profileHeaderImage = document.getElementById(elem.id).firstElementChild.firstElementChild;
			var profileContainer = document.getElementById(elem.parentNode.id);

			if(profileHeaderImage.src == "http://localhost/Forum/images/glyphicons/rightarrow.png"){
				profileHeaderImage.src="images/glyphicons/downarrow.png";
				profileContainer.classList.add("active");

			}
			else{
				profileHeaderImage.src="images/glyphicons/rightarrow.png";
				profileContainer.classList.remove("active");
			}
			


		}
	</script>
@stop