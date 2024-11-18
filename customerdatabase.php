<?php
if(isset($_POST['sub']))
{
	$conn= new mysqli('localhost','root','','hotel');
	if($conn)
	{
		$room=$_POST['sub'];
		
		$update="UPDATE `room`
			SET book='no'
			WHERE room='$room';";
		$result=$conn->query($update);
		if($result)
		{
				header('location:customer.php');
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