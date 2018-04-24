<?php
	$nama = $_POST['name'];
	$vmail = $_POST['mail'];
	$pesan = $_POST['messages'];
	
	
	$email_from = 'votrhckd@gmail.com';
	
	$email_subject= "New Form Submission";
	
	$email_body = " You Get New Messages.\n";
					"Nama: $nama.\n";
					"Email: $email.\n";
					"Pesan: $pesan.\n";
					
	$to = 'rajamwar1@gmail.com';
	
	$headers =  "From L $email_from \r\n";
	$headers .= "Reply-To: $vmail \r\n";
	mail($to,$email_subject,$email_body,$headers);
	
	header(Location:index.html);
	
?>