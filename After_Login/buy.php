<!DOCTYPE html>
<html>
<head>
<title>Buy</title>
	<link href="css/buy/style.css" rel="stylesheet" type="text/css" />
	<!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
     <link href="css/buy/custom_buy.css" rel="stylesheet">

	 
</head>
<body>

<div class="main_page">
	<div class="container-fluid">
    	<div class="page-header">
			<div class="container">
            	<div class="col-md-3">
                	<a href="LoggedIn_reBooks.html"><img src="images/book.png" /></a>
                </div>
				
				
                <div class="col-md-9">
					<nav class="navbar navbar-default">
						<div class="container-fluid">
							<!-- Brand and toggle get grouped for better mobile display -->
							<div class="navbar-header">
							  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
								<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							  </button>
							</div>

							<!-- Collect the nav links, forms, and other content for toggling -->
							<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							  <ul class="nav navbar-nav">
								<li><a href="LoggedIn_reBooks.html">HOME<span class="sr-only">(current)</span></a></li>
								<li ><a href="logout.php">LOGOUT</a></li>
								<li><a href="select_sem.html">DOWNLOAD</a></li>
								<li><a href="about.html">ABOUT US</a></li>
								<li><a href="contact.html">CUSTOMER SUPPORT</a></li>
							  </ul>
							</div><!-- /.navbar-collapse -->
					  </div><!-- /.container-fluid -->
					</nav>
				</div>
            </div>
        </div>
<div class="container">
	<div class="row">
		

	<?php
		
		$db=mysqli_connect('localhost','root','','upload');
		$query="SELECT * FROM ad";
		$res = mysqli_query($db,$query);
		
		while($row = mysqli_fetch_array($res))
			{ ?> <div class="col-md-4">
					<table class="table" >
					<tr>
						<td><h3><?php echo $row['bookname']; ?> </h3></td>
					</tr>
					<tr>
						<td> <img src="Uploaded_images/<?php echo $row["image"]; ?>" height="200" width="275" > </td>
					</tr>
					<tr>
						<td> <h4> Author:- <?php echo $row['author']; ?> <br/> <br/>
						Branch and Sem:- <?php echo $row['branch_sem']; ?> <br/> <br/> 
						Description:- <?php echo $row['book_descrp']; ?> </h4> </td>
					
					</tr>
						
					<tr>
						<td id="<?php echo $row['id'];?>" style="display:none"> <h4> Seller Name:- <?php echo $row['name']; ?>
						<br/> <br/>
						Seller Email ID:- <?php echo $row['email']; ?>
						 <br/> <br/>
						Phone No.:- <?php echo $row['phone']; ?> </h4> </td>
					</tr>
					
					<tr>
						<td><button  class="button" onclick="moreFunction(<?php echo $row['id'];?>)" >Contact Details</button></td> 
					</tr>
					</table>
					<br/> <br/>
						<script type="text/javascript">
						function moreFunction(id) {
							var x = document.getElementById(id);
							
							if (x.style.display === 'block') {
								x.style.display = 'none';
							} else {
								x.style.display = 'block';
							}
						}
					</script>
				</div>
			<?php	
			}
	?>
		
	</div>
</div>


	</div>
</div>	
	

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>