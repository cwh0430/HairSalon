<?php 

$username = filter_input(INPUT_POST, 'username');
$password = filter_input(INPUT_POST, 'password');

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
	
		if (mysqli_connect_error()){
			die('Connect Error ('.mysqli_connect_errno() .') ' . mysqli_connect_error());
		}
		else{
			$sql = $conn->query("SELECT * FROM ACCOUNT WHERE username ='". $_POST["username"] . "'    ");
			$hashresult = $sql->fetch_assoc();
			if($hashresult){
				$hashed_password = $hashresult['password'];
				$correct = password_verify($password, $hashed_password);
				if($correct == true)
				{
					echo "<script>  
						alert('Successfully Logged In! You will be directed to the homepage');
						window.location.href ='http://localhost/salon/index.php';
						</script>";
					session_start();
					$_SESSION["logname"] = $username;
				}
				else
				{
					echo "<script>  
						alert('Username and Password does not matched! Please Try Again...');
						window.location.href ='http://localhost/salon/login';
						</script>"; 
				}
			}
			else{
					echo "<script>  
						alert('Username and Password does not matched! Please Try Again...');
						window.location.href ='http://localhost/salon/login';
						</script>";   
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