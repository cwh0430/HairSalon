<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="../style/ourstyle.css">

		<title>
			XX Hair Salon - Admin Edit
		</title>
		<link rel="icon" href="../img/icon.png">
<style>
.content{
	margin-left: 115px;
	margin-right: 115px;
}
input{
	margin-top: 20px;
	padding: 10px;
	background-color: #333333;
	width:41%;
	color: white;
	border-style: none;
	margin-left: 300px;
	cursor: pointer;
}

input:hover{
	background-color: pink;
	transition: 0.3s;
	
}

.showbook{
	background-color: #f4f5e2;
	padding :20px;
	margin-right: 300px;
	margin-left: 300px;
	
}
</style>
</head>
<body>
 <?php include('C:\wamp64\www\salon\includes\header.php'); ?>
 <?php include('C:\wamp64\www\salon\includes\navi.php'); ?>
 <div class='content'>
 <h1 style="text-align:center">What do you(Admin) want to perform?<hr></h1>
 <?php 
  $db_host = 'localhost';
  $db_user = 'root';
  $db_password = '';
  $db_db = 'salon';

// Create connection
$conn = new mysqli ($db_host, $db_user, $db_password, $db_db);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, type, stylist, booktime, endtime, email, hp FROM appointment";
$result = $conn->query($sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
	echo "<div class='showbook'>";
    echo "Booking ID: " . ($row["id"]). "<br>Type: " . $row["type"]. "<br>Stylist: " . $row["stylist"]. "<br>Start Time: " . $row["booktime"]."<br>End Time: " . $row["endtime"]."<br>Email: " . $row["email"]."<br>Phone Number: " .$row["hp"]. "<br>";
	echo "</div>";
	echo "<form method='post' action='editbook.php'>";
	echo "<input type= 'hidden' name='id' value = '";
	echo "".$row['id']. "'>";
	echo "<input type= 'hidden' name='endtime' value = '";
	echo "".$row['endtime']. "'>";
	echo "<input type = 'submit' value = 'Edit Appointment'>";
	echo "</form>";
	echo "<form method='post' action='deletebook.php'>";
	echo "<input type= 'hidden' name='id' value = '";
	echo "".$row['id']. "'>";
	echo "<input type = 'submit' value = 'Delete/Done Appointment'>";
	echo "</form>";
	echo "<hr>";
  }
} else {
  echo "0 results. Temporary no active appointment";
}

$conn->close();
?>
</div>
 <?php include('C:\wamp64\www\salon\includes\footer.php'); ?>

</body>
</html>