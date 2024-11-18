
<?php
if(isset ($_POST['sub']))
{
	$conn= new mysqli('localhost','root','');
	if($conn)
	{
		$database="CREATE DATABASE IF NOT EXISTS `hotel`";
		$database1 =$conn->query($database);
		if($database1)
		{
			$table="CREATE TABLE IF NOT EXISTS `hotel`.`check in`
			(
			`id` INT(5) NOT NULL AUTO_INCREMENT,
			`name` VARCHAR(25) NOT NULL,
			`adhaar` VARCHAR(12) NOT NULL,
			`pass`  VARCHAR(10) NOT NULL,
			`address` VARCHAR(20) NOT NULL,
			`phone` VARCHAR(11) NOT NULL,
			`email` VARCHAR(20) NOT NULL,
			`gender` VARCHAR(10) NOT NULL,
			PRIMARY KEY (`id`))";
			$table1=$conn->query($table);
			if($table1)
			{
				$name=$_POST['name'];
				$adhaar=$_POST['adhaar'];
				$pass=$_POST['pass'];
				$address=$_POST['address'];
				
				$phone =$_POST['phone'];
				$email=$_POST['email'];
				$gender=$_POST['gender'];
				
				$insert = "INSERT INTO `hotel`.`check in`
				(name,adhaar,pass,address,phone,email,gender)
				VALUE('".$name."','".$adhaar."','".$pass."','".$address."','".$phone."','".$email."','".$gender."')";
				
				if($conn->query($insert))
				{
					
					header('location:memberpotral.php');
					
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
			echo"database not created";
		}
	}else
	{
		echo "connection error";
	}	
}
?>
