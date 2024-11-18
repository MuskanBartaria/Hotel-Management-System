<?php
if(isset($_POST['sub']))
{
	$conn= new mysqli('localhost','root','','hotel');
	if($conn)
	{
		$room=$_POST['room'];
		
		$update="UPDATE `room`
			SET book='yes'
			WHERE room='$room';";
		$result=$conn->query($update);
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