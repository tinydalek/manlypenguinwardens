<?php 
function doDB() {
	global $mysqli;

	$mysqli = mysqli_connect('localhost','root','','manlypenguin');
	if (mysqli_connect_errno()){
		printf ("Connect failed: %s\n" . mysqli_connect_error());
		exit();
	}
}
?>