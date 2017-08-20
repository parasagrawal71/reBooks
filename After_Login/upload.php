<?php
	
			$name=$_POST['user_name'];
			$email=$_POST['user_email'];
			$phone=$_POST['user_phone'];
			$college=$_POST['user_college'];
			$bookname=$_POST['bookname'];
			$author=$_POST['author'];
			$branch_sem=$_POST['branch_sem'];
			$book_descrp=$_POST['book_descrp'];
			
			if(isset($_POST['submit'])){
				$target = 'C:/xampp/htdocs/reBooks/After_Login/Uploaded_images/'.basename($_FILES['image']['name']);
				$db=mysqli_connect('localhost','root','','upload');
				$image = $_FILES['image']['name'];
								
				$escname=mysqli_real_escape_string($db, $name);
				$escemail=mysqli_real_escape_string($db, $email);
				$escphone=mysqli_real_escape_string($db, $phone);				
				$esccollege=mysqli_real_escape_string($db, $college);
				$escbookname=mysqli_real_escape_string($db, $bookname);
				$escauthor=mysqli_real_escape_string($db, $author);
				$escbranch_sem=mysqli_real_escape_string($db, $branch_sem);
				$escbook_descrp=mysqli_real_escape_string($db, $book_descrp);
				
					
				$query="INSERT INTO ad(name,email,phone,college,bookname,author,branch_sem,book_descrp,image) 
					VALUES('$escname','$escemail','$escphone','$esccollege','$escbookname','$escauthor','$escbranch_sem','$escbook_descrp','$image')";
				mysqli_query($db,$query);
					
				if(move_uploaded_file($_FILES['image']['tmp_name'],$target))
				{
					echo "<SCRIPT type='text/javascript'>
				alert('Uploaded Successfully');
										
				window.location.replace('buy.php');
				</SCRIPT>" ;
				}
				else
				{	echo "<SCRIPT type='text/javascript'>
					alert(' Not Uploaded ');
											
					window.location.replace('upload.html');
					</SCRIPT>" ;
				}	
			}
			

?>