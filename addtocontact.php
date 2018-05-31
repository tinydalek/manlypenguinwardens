<?php 

if (isset($_POST['submit'])) {
	//connect to database
	include 'conn_penguin.php';
	doDB();	
	
	//create safe values for use
	$contact_name = mysqli_real_escape_string($mysqli, $_POST['name']);
	$contact_email = mysqli_real_escape_string($mysqli, $_POST['email']);
	$enquiry_type = mysqli_real_escape_string($mysqli, $_POST['type']);
	$contact_comment = mysqli_real_escape_string($mysqli, $_POST['comment']);

	
		//add info to cart table
		$addtocontact_sql = "INSERT INTO contact
			(contact_name,
			contact_email,
			enquiry_type,
			contact_comments)
		VALUES ('".$contact_name."',
				'".$contact_email."',
				'".$enquiry_type."',
				'".$contact_comment."')";
		$addtocart_res = mysqli_query($mysqli, $addtocontact_sql) or die(mysqli_error($mysqli));
		//close connection to MySQL
		mysqli_close($mysqli);
	
//	alert
	echo "<script>
		window.location.href = 'contact.html';	
		alert('Thank you, $contact_name, for your Enquiry for $enquiry_type. Your message is \" $contact_comment\"');
	</script>";
}
 else {
	
}
		// <p>Back to <a href='donation.html'> donation page  </a></p>
		// <p>Back to <a href='.html'> home page  </a></p>		
		//redirect to donation page
		// header("Location: donation.html");
?>