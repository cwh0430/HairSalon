<?php

$id = $_POST['id'];
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
			$sql = "DELETE FROM appointment WHERE id = '$id'";
			if($conn->query($sql)){
				echo "<script>  
					alert('Successfully Delete Appointment!');
					window.location.href ='http://localhost/salon/admin/adminEdit.php';
					</script>";
			}
			else{
				echo "Error: ". $sql . "<br>".$conn->error;
			}
			$conn->close();
		}
?>