<!DOCTYPE HTML>
<html>
<head>

</head>
<body>
 <?php include('C:\wamp64\www\salon\includes\header.php'); ?>
 <?php include('C:\wamp64\www\salon\includes\navi.php'); ?>
 
<style>
.content {
	margin-left: 115px;
	margin-right: 115px;
	margin-top: 10px;
	background-color: #F5F5F5;
	padding: 20px;
}

.content select{
	padding: 5px;
}

.content input{
	padding: 4px;
}

</style>
<?php
$id = $_POST['id'];
?>
<div class="content">
<h1>Which information do you want to edit?</h1>

<?php
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
			$sql = $conn->query("SELECT * FROM appointment WHERE id ='". $_POST["id"] . "'    ");
			$result = $sql->fetch_assoc();
			if($result){
				echo "Booking ID: ".$result['id']."<br><br>";
				echo "Type: ".$result['type']."<br><br>";
				echo "Stylist: ".$result['stylist']."<br><br>";
				echo "Start Time: ".$result['booktime']."<br><br>";
				echo "End Time: ".$result['endtime']."<br><br>";
				echo "Email: ".$result['email']."<br><br>";
				echo "Phone Number: ".$result['hp']."<br><br><hr>";
			}
			else{
				echo "Error: ". $sql . "<br>".$conn->error;
			}
			$conn->close();
		}
?>

<p style="color:red;">** Please Follow The Format Accordingly **</p>
<p> Type: (Haircut, Perm/Rebonding, Colouring, Treatment) </p>
<p> Stylist: (Woody, Yang, Shiin, Huey, Alicia)</p>
<p> Start time/End Time: (YYYY-MM-DD HH:MM:00)</p>
<p> Email: xxx@youremail.com </p>
<p> Phone: Integer value <hr></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<label for= "edit"> Please Select One To Edit: </label>
  <select name="edit" id="edit">
    <option value="type">Type</option>
    <option value="stylist">Stylist</option>
    <option value="booktime">Start Time</option>
    <option value="email">Email</option>
	<option value="hp">HP</option>
  </select>
  	<input type="hidden" name = "id" value = "<?php echo $id?>">
	<label><br><br>Please Enter New Value: </label>
	<input type="text" name = "value">
	<input type="submit" name= "confirm" value="Confirm">
</form>


<?php

if(isset($_POST['confirm']))
{
	if( $_POST['edit'] == "booktime")
	{
		$minutes_to_add = 60;
		$endtime = new DateTime($_POST['value']);
		$endtime->add(new DateInterval('PT' . $minutes_to_add . 'M'));
		$stamp = $endtime->format('Y-m-d H:i');
		
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
			$sql1 = $conn->query("UPDATE APPOINTMENT SET ".$_POST['edit']."= '".$_POST['value']."' , endtime = '".$stamp."' WHERE id ='". $_POST['id'] . "'    ");

			if($sql1 ==TRUE){
				echo "<script>  
					alert('Successfully Edit Appointment!' );
					window.location.href ='http://localhost/salon/admin/adminEdit.php';
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
			$sql1 = $conn->query("UPDATE APPOINTMENT SET ".$_POST['edit']."= '".$_POST['value']."' WHERE id ='". $_POST['id'] . "'    ");

			if($sql1 ==TRUE){
				echo "<script>  
					alert('Successfully Edit Appointment!' );
					window.location.href ='http://localhost/salon/admin/adminEdit.php';
					</script>";
			}
			else{
				echo "Error: ". $sql1 . "<br>".$conn->error;
			}
			$conn->close();
		}
	}

}


?>
</div>
 <?php include('C:\wamp64\www\salon\includes\footer.php'); ?>
</body>
</html>