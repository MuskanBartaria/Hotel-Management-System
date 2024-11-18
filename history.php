<html>
<head><title>hotel</title>
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
	 

	</head><body>
<div class="container-fluid">
<div class="well">
	<a href="memberpotral.php">
	<i class="material-icons" style="font-size:58px; ">BACK</i>
	</a>

	<div class="logo pull-right" style="font-size:50px;">Hotel</div>
	
	</div>
	
<div class= "well" style="font-size:20px;">
<?php
$conn= new mysqli('localhost','root','','hotel');
			if($conn)
			{
 				$select="SELECT * FROM `hotel`.`customers`";
					$result=$conn->query($select);
					if($result->num_rows>0)
					{echo '<table class="table table-striped table-responsive">';
						echo"<tr>";
							echo "<td>HISTORY</td>";
							echo"</tr>";
						while($row=$result->fetch_assoc())
						{
							
							echo"<tr>";
							
							
							echo "<td>".$row["id"]."</td>";
							echo "<td>".$row["first_name"]."</td>";
							echo "<td>".$row["last_name"]."</td>";
							echo "<td>".$row["aadhar"]."</td>";
							echo "<td>".$row["address"]."</td>";
							echo "<td>".$row["phone"]."</td>";
							echo "<td>".$row["check_in_date"]."</td>";
							echo "<td>".$row["check_in_time"]."</td>";
							echo "<td>".$row["room"]."</td>";
							echo "<td>".$row["number"]."</td>";
							echo "<td>".$row["payment"]."</td>";
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
</form>


</div></div></body>
</html>