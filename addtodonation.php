<?php 

if (isset($_POST['submit'])) {
	//connect to database
	include 'conn_penguin.php';
	doDB();	
	
	//create safe values for use
	$donation_name = mysqli_real_escape_string($mysqli, $_POST['name']);
	$donation_address = mysqli_real_escape_string($mysqli, $_POST['address']);
	$donation_city = mysqli_real_escape_string($mysqli, $_POST['city']);
	$donation_state = mysqli_real_escape_string($mysqli, $_POST['state']);
	$donation_email = mysqli_real_escape_string($mysqli, $_POST['email']);
	$donation_phone = mysqli_real_escape_string($mysqli, $_POST['phone']);
	$donation_amount = mysqli_real_escape_string($mysqli, $_POST['amount']);
	$donation_type = mysqli_real_escape_string($mysqli, $_POST['type']);
	$donation_comment = mysqli_real_escape_string($mysqli, $_POST['comment']);

	
		//add info to cart table
		$addtodonation_sql = "INSERT INTO donation
			(donation_name,
			donation_address,
			donation_city,
			donation_state,
			donation_email,
			donation_tel,
			donation_amount,
			Payment_type,
			donation_comments)
		VALUES ('".$donation_name."',
				'".$donation_address."',
				'".$donation_city."',
				'".$donation_state."',
				'".$donation_email."',
				'".$donation_phone."',
				'".$donation_amount."',
				'".$donation_type."',
				'".$donation_comment."')";
		$addtocart_res = mysqli_query($mysqli, $addtodonation_sql) or die(mysqli_error($mysqli));
		//close connection to MySQL
		mysqli_close($mysqli);
	
//	alert
	echo "<script>
			window.location.href = 'donation.html';	
			alert('Thank you, $donation_name, for your $$donation_amount donation. Your donation will help our society.');
		</script>";
}
 else {
	
}
		// <p>Back to <a href='donation.html'> donation page  </a></p>
		// <p>Back to <a href='.html'> home page  </a></p>		
		//redirect to donation page
		// header("Location: donation.html");
?>