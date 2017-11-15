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
		$insert = mysqli_query($connect, "insert into subscribers values('', '$email')");
		
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
		$insert = mysqli_query($connect, "insert into subscribers values('', '$email')");
		
		echo "Mail sent! Thank you ".$name.", We will contact you shortly";
	}

	if(isset($_POST['sub_message'])){
		$message = $_POST['sub_message'];
		$subj = $_POST['subject'];

		$select = mysqli_query($connect, "Select * from subscribers");
		if(mysqli_num_rows($select)){
			while($row = mysqli_fetch_assoc($select)){
				$email[] = $row['email'];
			}
		}
		else{echo "Could not fetch data from database".mysqli_error($connect);}

		// In case any of our lines are larger than 70 characters, we should use wordwrap()
		$message = wordwrap($message, 70, "\r\n");
		$to = implode(", ", $email);
		$subject = "Message from www.toscherry.com \n".$subj;

		//mail($to, $subject, $message);

		
		
		echo "Mail sent to the subscribers";
	}
?>