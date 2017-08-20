<?php
  
   
   
			$first=$_POST['fnames'];
			$last=$_POST['lnames'];
			$email=$_POST['user-emails'];
			$phone=$_POST['user-phones'];
			$pass=$_POST['user-pws'];
			$college=$_POST['colleges'];
			$repass=$_POST['user-pws-repeat'];
			
			if($pass!=$repass)
			{
				echo "Passwors didn't match!";
			}
			
			
			
			else
			{
				$db=mysqli_connect('localhost','root','','signup');
				$escfirst=mysqli_real_escape_string($db, $first);
				$esclast=mysqli_real_escape_string($db, $last);
				$escemail=mysqli_real_escape_string($db, $email);
				$escphone=mysqli_real_escape_string($db, $phone);
				$escpass=mysqli_real_escape_string($db, $pass);
				$esccollege=mysqli_real_escape_string($db, $college);
				$query="INSERT INTO users(first,last,email,phone,pass,college) 
					VALUES('$escfirst','$esclast','$escemail','$escphone','$escpass','$esccollege')";
				
				
					if(mysqli_query($db,$query))
					{
					$message = 'Successfully created';

									echo "<SCRIPT type='text/javascript'>
										alert('$message');
										
										window.location.replace('reBooks.html');
									</SCRIPT>" ;
					}
				
			}
			
?>