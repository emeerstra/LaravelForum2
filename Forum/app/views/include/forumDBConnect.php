<?php

$server = 'localhost';
$username = 'root';
$password = 'RedAlert14';
$database = 'laravelForum';

if(!mysql_connect($server, $username, $password)) {
	exit('Error: Could not make a connection with the database');
}

if(!mysql_select_db($database)) {
	exit('Error: Could not select the database');
}

?>