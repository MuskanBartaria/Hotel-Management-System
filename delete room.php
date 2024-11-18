<?php
if(isset($_POST['sub']))
{
	$conn= new mysqli('localhost','root','','hotel');
	if($conn)
	{
		$room=$_POST['room'];
		
		$delete="DELETE  FROM `hotel`.`room` WHERE room='$room'";
		$result=$conn->query($delete);
		if($result)
		{
				header('location:memberpotral.php');
		}else
		{
			echo"not deleted";
		}
		
	}else
	{
		echo"not connected";
	}
}


?>