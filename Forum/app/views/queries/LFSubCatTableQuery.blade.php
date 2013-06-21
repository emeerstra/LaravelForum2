<!--- THIS FILE IS THE QUERY USED TO GET ALL THE SUBCATEGORIES BASED ON A PASSED IN CAT ID THROUGH POST --->
@include('../include/forumDBConnect')
<?php
	$sql = "SELECT * FROM `subcategories` WHERE CatID = " .mysql_real_escape_string($_SESSION['CurrentCatID']) ;
	
	$result1 = mysql_query($sql);
	
	if(!$result1) { 
		echo 'No display for you in subcat table query'; 
	}
	else {
		if(mysql_num_rows($result1)==0){
			
		}
		else {
			echo '
				
					<div class="tableHeaderRow">
						<h4>' . $_SESSION["CurrentCatTitle"] .'</h4>
					</div>
					<div class="allTableRows">';
				  
			while($row = mysql_fetch_assoc($result1))
			{

					echo '<div class="tableRow">
							<div class="tableContentRow">
								<div class="tableContent">
									<form action ="forumPosts.php" method="POST">
										<input type="hidden" name="SubCatID" value="' . $row['SubCatID'] . '">
										<input type="hidden" name="SubCatTitle" value="' .$row['SubCatTitle'] . '">
										<button><h5>' . $row['SubCatTitle'] . '</h5></button>
									</form>
									<p class="content">' . $row['SubCatDescription'] . ': ' . ' Posted On: ' . $row['SubCatDate'] . '</p>
								</div>
							</div>
							<div class="tableInfoRow">
								<div class="tableContent">
									<p class="infoContent"> Posts:' . $row['SubCatTotalPosts'] . '</p>
								</div>
							</div>
						</div>';	
				
			}
			echo'
			</div>';
		}
	}
?>