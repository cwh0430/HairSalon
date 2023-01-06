<?php 
$name = $_POST['name'];
$email = $_POST['email'];
$msg = $_POST['msg'];

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
			$sql = "INSERT INTO contact(name, email, opinion)
			values ('$name', '$email', '$msg')";
			if($conn->query($sql)){
				echo "<script>  
					alert('Message Succesfully Submitted ! ');
					window.location.href ='http://localhost/salon/contact/';
					</script>";
			}
			else{
				echo "Error: ". $sql . "<br>".$conn->error;
			}
			$conn->close();
		}
?>