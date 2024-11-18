<?php
if(isset($_POST['sub']))
{
	$conn= new mysqli('localhost','root','','hotel');
	if($conn)
	{
		$table= "CREATE TABLE IF NOT EXISTS `hotel`.`room`
		(
		`room` INT(10) NOT NULL,
		`book` VARCHAR(10) NOT NULL,
			PRIMARY KEY(`room`))";
		$table1=$conn->query($table);
		IF($table1)
		{
			$room=$_POST['room'];
			$book="yes";
			$insert="INSERT INTO `hotel`.`room`(room,book)
			VALUE('".$room."','".$book."')";
			if($conn->query($insert))
			{
				header('location:memberpotral.php');
			}
		}else
		{
				echo"table not created";
		}
    
	}else
	{
		echo"not connected";
	}
	
}

?>