
<div class="row-fluid absolutePosition">
	<div class="span6">
			<ul class="breadcrumb">
				<li><a href="forumIndex.php">Forum</a> 
				<?php 
					if(isset($_SESSION['CurrentCatID'])) { ?>
						<span class="divider">/</span></li>
						<li><a href="forumSubCategory.php"><?php echo $_SESSION['CurrentCatTitle']; ?></a> 
					<?php } ?>
					
					<?php
						if(isset($_SESSION['CurrentSubCatID'])) { ?>
						<span class="divider">/</span></li>
						<li><a href="forumPosts.php"><?php echo $_SESSION['CurrentSubCatTitle']; ?></a> 
					<?php } ?>
			</ul>
	</div>
</div>