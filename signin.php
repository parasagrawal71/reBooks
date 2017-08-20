<?php
session_start(); //Starting session
				   
	 if(isset($_POST['user-emails'])) {
		$emails=$_POST['user-emails'];
		$pws=$_POST['user-pws'];
		$db=mysqli_connect('localhost','root','','signup');
		$query="SELECT * FROM users WHERE email='$emails' AND pass='$pws'";
	    $res= mysqli_query($db,$query);
		if(mysqli_num_rows($res) == 1){
			$_SESSION['login_user']=$emails;
			 $message = 'Successfully Logged In.';

				echo "<SCRIPT type='text/javascript'>
				alert('$message');
										
				window.location.replace('After_Login/LoggedIn_reBooks.html');
				</SCRIPT>" ;
									
				}
				else {
					echo "<SCRIPT type='text/javascript'>
				alert('Invalid Username or Password');
										
				window.location.replace('login.html');
				</SCRIPT>" ;
				}
				
				mysqli_close($db);
	 }
?>