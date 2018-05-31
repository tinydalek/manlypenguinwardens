<?php 
function doDB() {
	global $mysqli;

	$mysqli = mysqli_connect('manlyvolunteerpenguinwardens.mysql.database.azure.com','tinydalek@manlyvolunteerpenguinwardens','Classproject1','manlypenguin');
	if (mysqli_connect_errno()){
		printf ("Connect failed: %s\n" . mysqli_connect_error());
		exit();
	}
}
?>