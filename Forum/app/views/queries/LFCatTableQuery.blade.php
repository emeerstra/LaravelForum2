@section('content2')
	@include('../include/forumDBConnect')
	<?php
	$sql = "SELECT * FROM `categories` ";
	$title = 'About the Forum';
	$result1 = mysql_query($sql);
		
		if(!$result1) { 
			echo 'No display for you'; 
		}
		else {
			if(mysql_num_rows($result1)==0){
				echo 'No rows yet';
			}
			else {
				echo '
						<div class="tableHeaderRow">
							<h4>' . $title . '</h4>
						</div>
						<div class="allTableRows">';
					  
				while($row = mysql_fetch_assoc($result1))
				{

						echo '<div class="tableRow">
							<div class="tableContentRow">
								<div class="tableContent">
									<form action ="forumSubCategory.php" method="POST">
										<input type="hidden" name="CatID" value="' . $row['catID'] . '">
										<input type="hidden" name="CatTitle" value="' .$row['catTitle'] . '">
										<button><h5>' . $row['catTitle'] . '</h5></button>
									</form>
									<p class="content">' . $row['catDescription'] . '</p>
								</div>
							</div>
							<div class="tableInfoRow">
								<div class="tableContent">
									<p class="infoContent"> Topics:' . $row['catTotalTopics'] . '</p>
								</div>
							</div>
						</div>';	
					
				}
				echo'
				</div>';
			}
		}
	?>
@stop