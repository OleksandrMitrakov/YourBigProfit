<?php
	if(isset($_POST['submit'])){
		$name=$_POST['name'];
		$email=$_POST['email'];
		$message=$_POST['message'];

		$to='vandy_invectors@yahoo.com'; // Receiver Email ID, Replace with your email ID
		$subject='Form Submission';
		$message_body="Name :".$name."\n"."Wrote the following :"."\n".$message;
		$headers="From: ".$email;

		if(mail($to, $subject, $message_body, $headers)){
			echo "<h1>Sent Successfully! Thank you"." ".$name.", We will contact you shortly!</h1>";
		}
		else{
			echo "Something went wrong!";
		}
	}
?>
