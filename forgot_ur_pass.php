<?php

		$email=$_POST['email'];
	if(isset($email)) {
	
		$db=mysqli_connect('localhost','root','','signup');
		$query= "SELECT pass FROM users WHERE email ='$email'";
		$pass= mysqli_query($db,$query);
		
		if(mysqli_num_rows($pass) == 1){
			$msg=  " Your Password is :" .$_POST['email'] ;
			$headers= "From: reBooks";
			// send email
			mail($email,'reBooks',$msg,$headers);
			
			echo "<SCRIPT type='text/javascript'>
					alert(' Password Sent Successfully');
											
					window.location.replace('reBooks.html');
					</SCRIPT>" ;
		}
		else{
			 			echo "<SCRIPT type='text/javascript'>
					alert(' You have not register yet');
											
					window.location.replace('login.html');
					</SCRIPT>" ;
		}
	}
?>