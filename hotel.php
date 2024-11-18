<?php
session_start();
$conn= new mysqli('localhost','root','','hotel');
	if($conn)
	{
		$f=1;
			$name = $_POST['name'];
			$password =$_POST['pass'];

		$select="SELECT * FROM `hotel`.`check in`";
		$result=$conn->query($select);
		if($result->num_rows>0)
		{ 
			
			while($row=$result->fetch_assoc())
			{
			
				if($name==$row["name"]&& $password==$row["pass"])
				{
					$_SESSION['name']=$name;
					$_SESSION['pass']=$password;
					$f=0;
					header('location:memberpotral.php');
	
				}
				
			}
			if($f!=0)
			{
				header('location:login.php');
			}
		}
	}
?>