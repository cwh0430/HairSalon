<?php 

$username = filter_input(INPUT_POST, 'username');
$password = filter_input(INPUT_POST, 'password');
$hashed_password = password_hash($password, PASSWORD_DEFAULT);
if(!empty($username))
{
	if(!empty($password))
	{
		$host="localhost";
		$dbusername = "root";
		$dbpassword = "";
		$dbname = "salon";

		//create connection 
		$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
		$sql = $conn ->query ("SELECT * FROM ACCOUNT WHERE username ='". $_POST["username"] . "'    ");
		$result = $sql->fetch_assoc();
		if($result)
		{
			include('C:\wamp64\www\salon\login\index.php');
			echo '<script type ="text/JavaScript">';  
			echo 'alert("This username already exist")';  
			echo '</script>'; 
		}
		if (mysqli_connect_error()){
			die('Connect Error ('.mysqli_connect_errno() .') ' . mysqli_connect_error());
		}
		else{
			$sql1 = "INSERT INTO account(username, password)
			values ('$username', '$hashed_password')";
			if($conn->query($sql1)){
				include('C:\wamp64\www\salon\login\index.php');
				echo '<script type ="text/JavaScript">';  
				echo 'alert("Succesfully Sign Up!")';  
				echo '</script>';  
			}
			else{
				
			}
			$conn->close();
		}
	}
	else
	{
		echo "Password should not be empty";
		die();
	}
}
else
{
	echo "Username should not be empty";
	die();
}
?>