<!DOCTYPE html>
<html lang="en">
<head>
	<title> Booking Form - XX Hair Salon </title>
	<link rel="icon" href="../img/icon.png">

<link rel="stylesheet" href="../style/ourstyle.css">
<link rel="stylesheet" href="../style/book.css">

</head>
  <body>
  <?php
// define variables and set to empty values
$email = $type = $hp = $stylist = $booktime= $date = $time = $date1 = $time1 ="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
  $email = test_input($_POST["email"]);
  $type = test_input($_POST["type"]);
  $hp = test_input($_POST["hp"]);
  $stylist = test_input($_POST["stylist"]);
  $time1 = test_input($_POST["time1"]);
  $date1 = test_input($_POST["date1"]);
}

function test_input($data) {
  $data = trim($data); //removes whitespace and other predefined characters from both sides of a string
  $data = stripslashes($data); // Returns a string with backslashes stripped off
  $data = htmlspecialchars($data); //Convert special characters to HTML entities
  return $data;
}

  $months_to_add = 1;
  $addtoday = date("Y-m-d");
  $addtoday = date('Y-m-d', strtotime("+2 weeks", strtotime($addtoday)));
?>
  <?php include('C:\wamp64\www\salon\includes\header.php'); ?>
  <?php include('C:\wamp64\www\salon\includes\navi.php'); ?>
  <div class="bookHead">
  <h1> Make An Appointment </h1>
  <h4>Scheduling a booking has never been easier!<br> Fill in the form and submit and we are seeing you very soon!</h2>
  </div>
  <div id="contentWrapper" class="content">
	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
	<div class="serviceDet">
	    <p class="sInfo" style="font-size:20px;">Service Information<br></p>
		<p>Type of Services:<br></p>
		<select name="type" required>
		<option value="Haircut">Haircut</option>
		<option value="Perm/Rebonding">Perm/Rebonding</option>
		<option value="Colouring">Colouring</option>
		<option value="Treatment">Treatment</option>
		</select>
		<p><br>Stylist:<br></p>
		<select name="stylist" required>
		<option value="Woody">Woody</option>
		<option value="Shiin">Shiin</option>
		<option value="Yang">Yang</option>
		<option value="Huey">Huey</option>
		<option value="Alicia">Alicia</option>
		</select>
		<label for="booktime"><br><br>Appointment (date and time):<br></label>
		<input type="date" id="booktime" name="date1" min = "<?php echo "".date("Y-m-d")."";?>" max= "<?php echo "".$addtoday."";?>" required>	
		<input id="booktime" list="times" type="time" name="time1" value="10:00" step="3600">

<datalist id="times">
    <option value="10:00:00">
    <option value="11:00:00">
    <option value="12:00:00">
    <option value="13:00:00">
    <option value="14:00:00">
    <option value="15:00:00">
    <option value="16:00:00">
    <option value="17:00:00">
    <option value="18:00:00">
    <option value="19:00:00">
</datalist>
	</div>
	<div class="serviceDet1">
		<p style="font-size:20px;">Personal Information</p>
		Name: <br><input type="text" name="name" required><br>
		Email Address: <br><input type="text" name="email" required><br>
		Phone Number:<br> <input type="text" 	name="hp" required><br>
		<input type="submit" value="Submit">
	</div>
	</form>
  </div>
  <div class="overview">
  <h1>Booking Overview</h1>
  <h5 style="color:red">**Each appointment duration is estimated to be around 1 hours.**</h5>
  <h2>Please check your appointment below and confirm:</h2>
  <div class="overviewInfo">
  <?php
  $booktime = $date1."T".$time1."";
  $minutes_to_add = 60;
  $endtime = new DateTime($booktime);
  $endtime->add(new DateInterval('PT' . $minutes_to_add . 'M'));
  $stamp = $endtime->format('Y-m-d H:i');
  echo "<p>Service Type</p>";
  echo "<br>";
  echo "<p>Stylist Name</p>";
  echo "<br>";
  echo "<p>Appointment Date</p>";
  echo "<br>";
  echo "<p>Appointment Time</p>";
  echo "<br>";
  echo "<p>Email</p>";
  echo "<br>";
  echo "<p>Phone Number</p>";
  echo "<br>";
  
  ?>
  </div>
  <div class="overviewInfo1">
  <?php
  echo $type;
  echo "<br><br>";
  echo $stylist;
  echo "<br><br>";
  echo $date1;
  echo "<br><br>";
  echo $time1;
  echo "<br><br>";
  echo $email;
  echo "<br><br>";
  echo $hp;
  echo "<br><br>";
  ?>
  </div>
  </div>
  <div class="serviceDet2">
  <form action="bookAct.php" method="post">

  <input type="hidden" name="type" value= "<?php echo $type?>">
  <input type="hidden" name="stylist" value= "<?php echo $stylist?>">
  <input type="hidden" name="booktime" value= "<?php echo $booktime ?>">
  <input type="hidden" name="endtime" value= "<?php echo $stamp ?>">
  <input type="hidden" name="email" value= "<?php echo $email ?>">
  <input type="hidden" name="hp" value= "<?php echo $hp ?>">

  <input type="submit" value="Confirm">
  </div>
  </form>
  
  <?php include('C:\wamp64\www\salon\includes\footer.php'); ?>
  </body>
</html>