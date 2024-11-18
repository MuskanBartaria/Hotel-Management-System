<?php

	if(isset ($_POST['sub']))
	{
		$conn= new mysqli('localhost','root','','hotel');
			if($conn)
			{
				$id=$_POST['sub'];
				
 				$delete="DELETE FROM `comment` WHERE ID='$id'";
				$result=$conn->query($delete);
				if($result)
							{
								header('location:index.php#contact');
							}else
							{
								echo"not done";
							}
							
						
					
			}else
			{
				echo "not connected";
			}
	}
		

?>