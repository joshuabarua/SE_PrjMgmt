<?php
require_once  "connection.php";
	
$message = "";
$user_level = "";
	if(isset($_POST["btnLogin"]))
	{
		$email = $_POST["email"];
		$password = $_POST["password"];	

		$query = "SELECT * FROM employee WHERE email='$email' AND password='$password' "; 
		$result = mysqli_query($db_connection, $query);
		if(mysqli_num_rows($result) > 0)
		{
			while($row = mysqli_fetch_assoc($result))
			{
				if($row["user_level"] == 0 ) 
				{
					$_SESSION['AdminUser'] = $row["email"];
					$_SESSION['user_level'] = $row["user_level"];
					header('Location: admin.php');
				} else 
				{
					$_SESSION['User'] = $row["email"];
					$_SESSION['user_level'] = $row["user_level"];
                    header('Location: user.php');
				}
			}
		}
		else 
		{
			$message = "Invalid Email or Password";
			header("Location: login.php");
			
		}
	}
?>