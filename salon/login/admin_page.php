<?php 

$adminuser = filter_input(INPUT_POST, 'adminuser');
$adminpass = filter_input(INPUT_POST, 'adminpass');
if(!empty($adminuser))
{
	if(!empty($adminpass))
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
			$sql = $conn->query("SELECT * FROM adminaccount WHERE adminuser ='". $_POST["adminuser"] . "'    ");
			$hashresult1 = $sql->fetch_assoc();
			if($hashresult1){
				$hashed_password = $hashresult1['adminpass'];
				$correct = password_verify($adminpass, $hashed_password);
				if($correct == true)
				{
					echo "<script>  
						alert('Successfully Logged In Admin! You will be directed to the homepage');
						window.location.href ='http://localhost/salon/index.php';
						</script>"; 
					session_start();
					$_SESSION["logname"] = $adminuser;
				}
				else
				{
					echo "<script>  
						alert('Password does not matched! Please Try Again... ');
						window.location.href ='http://localhost/salon/login/adminlogin.php';
						</script>"; 
				}
			}
			else{
					echo "<script>  
						alert('Username and Password does not matched! Please Try Again...');
						window.location.href ='http://localhost/salon/login/adminlogin.php';
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