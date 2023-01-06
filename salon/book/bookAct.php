<?php 
$type = $_POST['type'];
$stylist = $_POST['stylist'];
$booktime = $_POST['booktime'];
$endtime = $_POST['endtime'];
$email = $_POST['email'];
$hp = $_POST['hp'];

if(!empty($email))
{
	if(!empty($hp))
	{
		$host="localhost";
		$dbusername = "root";
		$dbpassword = "";
		$dbname = "salon";
	
		//create connection 
		$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
		//to make sure that no repeat for a stylist at a specific appointment time
		$sql = $conn->query("SELECT * FROM appointment WHERE booktime ='". $_POST["booktime"] . "' AND stylist ='". $_POST["stylist"] . "'     ");
		$result = $sql->fetch_assoc();
		if($result)
		{
			echo "<script>  
				alert('The appointment time $booktime is not available for this selected stylist. Please try again!');
				window.location.href ='http://localhost/salon/book/index.php';
				</script>";
				die();
		}
		if (mysqli_connect_error()){
			die('Connect Error ('.mysqli_connect_errno() .') ' . mysqli_connect_error());
		}
		else{
			$sql1 = "INSERT INTO appointment(type, stylist, booktime, endtime, email, hp)
			values ('$type', '$stylist', '$booktime', '$endtime', '$email', '$hp')";
			if($conn->query($sql1)){
				echo "<script>  
					alert('Successfully Booked Appointment! You will be directed to the homepage');
					window.location.href ='http://localhost/salon/index.php';
					</script>";
			}
			else{
				echo "Error: ". $sql1 . "<br>".$conn->error;
			}
			$conn->close();
		}
	}
	else
	{
		echo "Phone Number should not be empty";
		die();
	}
}
else
{
	echo "Email should not be empty";
	die();
}
?>
