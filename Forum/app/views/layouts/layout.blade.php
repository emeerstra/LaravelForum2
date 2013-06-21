<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title> This is a forum being created using Twitter Bootstrap and Mysql</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="This is a test site to see if I can do the things I need for a job">
	<meta name="author" content="Eric Meerstra">
	
	<!-- Styles are here -->
	<link href="/Forum/public/css/bootstrap.css" rel="stylesheet">
	<link href="bootstrap/css/forumNavigation.css" rel="stylesheet">
	<link href="bootstrap/css/forumTables.css" rel="stylesheet">
	<link href="bootstrap/css/forumProfile.css" rel="stylesheet">
	<link href="bootstrap/css/forumForms.css" rel="stylesheet">
	<link href="bootstrap/css/forumRecentPosts.css" rel="stylesheet">
	<!-- End of styles -->
	
	<!-- Start of scripts here -->
	<script src="js/angular.min.js"></script>
	<script src="js/forumIndex.js"></script>
	<script src="js/forumNavigation.js"></script>
	
	<!-- End of scripts -->
</head>

@include('../include/laravelForumHeader')


@yield('content')

	
</body>
</html>