<?php
	include('connect_toscherry.php');

	if(isset($_POST['email_sub'])){
		$email = $_POST['email_sub'];
		
		$insert = mysqli_query($connect, "insert into subscribers values('', '$email')");
		if($insert){ echo "Subscription successfully done";} else{ echo"Couldn\'t upload".mysqli_error();}
	}

	if(isset($_POST['message_name'])){
		$name = $_POST['message_name'];
		$email = $_POST['email'];
		$message = $_POST['message'];

		$to = "toscherry@yahoo.com";
		$subject = "Message from www.toscherry.com ";
		$subject2 = "Copy of your message ";

		$msg = "Name: ".$name."\n\n"."Email: ".$email."\n\n"."Wrote the following: \n".$message;
		$msg2 = "We got your message: "."\n\n"."Name: ".$name."\n\n"."Email: ".$email."\n\n".$message;

		$headers = "From: ".$email;
		$headers2 = "From: ".$to;

		//mail($to, $subject, $msg, $headers);
		//mail($email, $subject2, $msg2, $headers2);
		
		echo "Mail sent! Thank you ".$name.", We will contact you shortly";
	}

	if(isset($_POST['contact_name'])){
		$name = $_POST['contact_name'];
		$email = $_POST['email'];
		$message = $_POST['message'];
		$subj = $_POST['subject'];

		$to = "toscherry@yahoo.com";
		$subject = "Message from www.toscherry.com \n".$subj;
		$subject2 = "Copy of your message \n".$subj;

		$msg = "Name: ".$name."\n\n"."Email: ".$email."\n\n"."Wrote the following: \n".$message;
		$msg2 = "We got your message: "."\n\n"."Name: ".$name."\n\n"."Email: ".$email."\n\n".$message;

		$headers = "From: ".$email;
		$headers2 = "From: ".$to;

		//mail($to, $subject, $msg, $headers);
		//mail($email, $subject2, $msg2, $headers2);
		
		echo "Mail sent! Thank you ".$name.", We will contact you shortly";
	}
?>