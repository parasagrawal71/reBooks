<?php
	
	$msg=  'Name: ' .$_POST['names'] ."\n"
		  .'Email: ' .$_POST['emails'] ."\n"
		  .'Phone: ' .$_POST['phones'] ."\n"
		  .'Message: ' .$_POST['messages'];
	$headers= "From: reBooks_USER";

		// send email
		mail('parasfbg5@gmail.com','USER',$msg,$headers);
		
	echo "<SCRIPT type='text/javascript'>
				alert('Sent Successfully');
										
				window.location.replace('LoggedIn_reBooks.html');
				</SCRIPT>" ;
?>