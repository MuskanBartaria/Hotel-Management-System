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
					$table="CREATE TABLE IF NOT EXISTS `hotel`.`comment`
					(
					`ID` INT(6) NOT NULL AUTO_INCREMENT,
					`name` VARCHAR(25) NOT NULL,
					`email` VARCHAR(60) NOT NULL,
					`comments`VARCHAR(60) NOT NULL,
					`date` VARCHAR(10) NOT NULL,
					PRIMARY KEY (`ID`))";
					$table1=$conn->query($table);
					if($table)
					{
						$name=$_POST['name'];
						$email=$_POST['email'];
						$comments=$_POST['comments'];
						$date= date("d/m/y");
						$insert= "INSERT INTO `hotel`.`comment`(name,email,comments,date)
						VALUES('".$name."','".$email."','".$comments."','".$date."')";
						if($conn->query($insert))
						{
							header('location:index.php#contact');
						}else
						{
							echo "data not inserted";
						}
					}else
					{
						echo "table not created";
					}
				}else
				{
					echo "database not created";
				}
			}else
			{
				echo "Not connected";
			}
			} 

		?>