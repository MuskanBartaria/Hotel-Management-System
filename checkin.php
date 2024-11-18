<!DOCTYPE html>
 <html >
	<head>
	<meta charset="utf-8">
	<title>hotel</title>

	<link rel="shortcut icon" href="favicon.ico">
	
	<link rel="stylesheet" href="css/superfish.css">
	
	<link rel="stylesheet" href="css/bootstrap-datepicker.min.css">
	
	<link rel="stylesheet" href="css/cs-select.css">
	<link rel="stylesheet" href="css/cs-skin-border.css">

	<link rel="stylesheet" href="css/themify-icons.css">
	
	<link rel="stylesheet" href="css/flaticon.css">
	
	<link rel="stylesheet" href="css/icomoon.css">
	
	<link rel="stylesheet" href="css/flexslider.css">
	
	<link rel="stylesheet" href="css/style.css">

	<script src="js/modernizr-2.6.2.min.js"></script>
	
</head>
<body>
	<div id="fh5co-wrapper">
	<div id="fh5co-page">
	<div id="fh5co-header">
		<header id="fh5co-header-section">
			<div class="container">
				<div class="nav-header">
					<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
					<h1 id="fh5co-logo"><a href="index.php">grand</a></h1>
					<nav id="fh5co-menu-wrap" role="navigation">
						<ul class="sf-menu" id="fh5co-primary-menu">
							<li><a class="active" href="index.php">Home</a></li>
							<li>
								<a href="hotel.php" class="fh5co-sub-ddown">Hotel</a>
								<ul class="fh5co-sub-menu">
								 	<li><a href="#">grand Hotel</a></li>
								 	<li><a href="#">Degrand Hotel</a></li>
									<li>
										<a href="#" class="fh5co-sub-ddown">King Hotel</a>
										
									</li>
									<li><a href="#">Five Star Hotel</a></li> 
								</ul>
							</li>
							<li><a href="services.php">Services</a></li>
							<li><a href="blog.php">Blog</a></li>
							<li><a href="contact.php">Contact</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</header>
		
	</div>
	<div class="fh5co-parallax" style="background-image: url(images/slider1.jpg);" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-md-offset-0 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0 text-center fh5co-table">
					<div class="fh5co-intro fh5co-table-cell">
						<h1 class="text-center">BOOK NOW</h1>
						</div>
				</div>
			</div>
		</div>
	</div>

<div class="container-fluid">
<div class="room" style="color:green;">
<?php
$conn= new mysqli('localhost','root','','hotel');
			if($conn)
			{
 				$select="SELECT * FROM `hotel`.`room` WHERE book='yes'";
					$result=$conn->query($select);
					if($result->num_rows>0)
					{echo '<table class="table table-striped table-responsive">';
						echo"<tr>";
							
							
							echo "<b>Room Available</b>&nbsp;&nbsp;";
							
						while($row=$result->fetch_assoc())
						{
							
							
							echo $row["room"]."&nbsp;&nbsp;";
							echo"</tr>";
							
						}
						echo'</table>';
					}
			}else
			{
				echo "not connected";
			}
?>

</div>
<div class="room" style="color:red;">
<?php
$conn= new mysqli('localhost','root','','hotel');
			if($conn)
			{
 				$select="SELECT * FROM `hotel`.`room` WHERE book='no'";
					$result=$conn->query($select);
					if($result->num_rows>0)
					{echo '<table class="table table-striped table-responsive">';
						echo"<tr>";
							
							
							echo "<b>Room not Available</b>&nbsp;&nbsp;";
							
						while($row=$result->fetch_assoc())
						{
							
							
							echo $row["room"]."&nbsp;&nbsp;";
							echo"</tr>";
							
						}
						echo'</table>';
					}
			}else
			{
				echo "not connected";
			}
?>

</div>
</div>
</div>
<div class="container-fluid">
<div class="well" >
	<div class="row" style="font-size:16px;">
	
		<div class="col-md-4 col-md-offset-4">
		<form  method="post">
			<div class="col-md-6">
				First Name:
				<input  id="name" name="first" placeholder="type your first name" type="text" required class="form-control">
			</div>
			<div class="col-md-6">
				Last Name:
				<input  id="lname" type="text" name="last" placeholder="type your last name" class="form-control" 
				required>
			</div>
			<div class="col-md-12">
				Aadhaar card Number 
				/Pan card Number:
				<input type="text" name="adh" placeholder="type your aadhaar number" required class="form-control" >
			</div>
			<div class="col-md-12">
				Address:
				<input type="text" name="add" required placeholder="type your address" class="form-control" >
			</div>
			<div class="col-md-12">
				Phone No.:<input type="phone" name="phone"required placeholder="type your phone number" class="form-control" >
			</div>
			<div class="col-md-6">
				check in date:<input type="date" name="date" required class="form-control" > 
			</div>
			<div class="col-md-6">
				check in time:<input type="time" name="time"required class="form-control" > 
			</div>
			<div class="col-md-6">
				Number of room:
				<input type="text" name="x" class="form-control"  required placeholder="number of rooms you need">
			</div>
			<div class="col-md-6">
				Room number:
				<input type ="text" name="room"required placeholder="room Number" class="form-control" ><br>
			</div>
				<input type="submit" name="sub" class="form-control btn btn-danger" />
				</form>
			<div class="logo3">

<?php
if(isset($_POST['sub']))
{
	$conn= new mysqli('localhost','root','','hotel');
	if($conn)
	{
		$table = "CREATE TABLE IF NOT EXISTS `customers`
		(
		`id` INT(2) NOT NULL AUTO_INCREMENT,
		`first_name` VARCHAR(25) NOT NULL,
		`last_name` VARCHAR(25) NOT NULL,
		`aadhar` VARCHAR(16) NOT NULL,
		`address` VARCHAR(25) NOT NULL,
		`phone` VARCHAR(11) NOT NULL,
		`check_in_date` VARCHAR(11) NOT NULL,
		`check_in_time` VARCHAR(11) NOT NULL,
		`room` INT(5) NOT NULL,
		`number` INT(5) NOT NULL,
		`payment` INT(10) NOT NULL,
		PRIMARY KEY (`id`))";
		$table1=$conn->query($table);
			if($table1)
			{
				$first=$_POST['first'];
				$last=$_POST['last'];
				$adh=$_POST['adh'];
				$add=$_POST['add'];
				$phone=$_POST['phone'];
				$date=$_POST['date'];
				$time=$_POST['time'];
				$x=$_POST['x'];
				$number=$_POST['room'];
				
				$paytm=($x*2500);
				$insert ="INSERT INTO `customers`
				(first_name,last_name,aadhar,address,phone,check_in_date,check_in_time,room,number,payment)
				VALUE ('".$first."','".$last."','".$adh."','".$add."','".$phone."','".$date."',
				'".$time."','".$x."','".$number."','".$paytm."')";
				if($conn->query($insert))
				{	
					echo "your name is ".$first.$last."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>";
					echo "your phone number is ".$phone."<br>";
					echo "your entry time is ".$time."<br>";
					echo "your payment is ".$paytm."<br>";
					$x=$number;
					echo "your room number is ".$x;
					echo"
							
						<form action='customerdatabase.php' method='post'>
						<button class='btn btn-default pull-right' type='submit'
						name='sub' value="."$x".">PAYMENT</button>
						</form>";
						
						
				}else
				{
					echo"data not inserted";
				}
			}else
			{
				echo"table not created";
			}
	}else
	{
		echo "not connected";
	}
}


?>
</div>


</div>
		</div>
	</div>
</div>
			
			

	<footer id="footer" class="fh5co-bg-color">
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<div class="copyright">
						<p>
						Designed & Developed by <a href="index.php" title="hotel" >
						Muskan Bartaria</a></p>
					</div>
				</div>
				<div class="col-md-6">
					<div class="row">
						<div class="col-md-3">
							<h3>Company</h3>
							<ul class="link">
								<li><a href="#">About Us</a></li>
								<li><a href="#">Hotels</a></li>
								<li><a href="#">Customer Care</a></li>
								<li><a href="#">Contact Us</a></li>
							</ul>
						</div>
						<div class="col-md-3">
							<h3>Our Facilities</h3>
							<ul class="link">
								<li><a href="#">Resturant</a></li>
								<li><a href="#">Bars</a></li>
								<li><a href="#">Pick-up</a></li>
								<li><a href="#">Swimming Pool</a></li>
								<li><a href="#">Spa</a></li>
								<li><a href="#">Gym</a></li>
							</ul>
						</div>
						<div class="col-md-6">
							<h3>Subscribe</h3>
							
							<form action="#" id="form-subscribe">
								<div class="form-field">
									<input type="email" placeholder="Email Address" id="email">
									<input type="submit" id="submit" value="Send">
								</div>
							</form>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<ul class="social-icons">
						<li>
							<a href="#"><i class="icon-twitter-with-circle"></i></a>
							<a href="#"><i class="icon-facebook-with-circle"></i></a>
							<a href="#"><i class="icon-instagram-with-circle"></i></a>
							<a href="#"><i class="icon-linkedin-with-circle"></i></a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</footer>

	</div>
	</div>
	<script src="js/jquery-2.1.4.min.js"></script>

	<script src="js/hoverIntent.js"></script>
	<script src="js/superfish.js"></script>

	<script src="js/bootstrap.min.js"></script>

	<script src="js/jquery.waypoints.min.js"></script>

	<script src="js/jquery.countTo.js"></script>
	
	<script src="js/jquery.stellar.min.js"></script>
	
	<script src="js/bootstrap-datepicker.min.js"></script>
	
	<script src="js/classie.js"></script>
	<script src="js/selectFx.js"></script>
	
	<script src="js/jquery.flexslider-min.js"></script>

	<script src="js/custom.js"></script>

</body>
</html>