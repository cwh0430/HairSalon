<?php
session_start();
?>
<head>
<link rel="stylesheet" href="../style/ourstyle.css">

</head>
<?php
	if(isset($_SESSION['logname']) && !empty($_SESSION['logname']))
	{
		echo "<div class='logout'>";
		echo "<p> Welcome Back! " . $_SESSION['logname'] . "<br>";
		echo "<a href= 'http://localhost/salon/login/logout.php' onclick=\"return confirm('Are you sure that you want to log out?');\">Logout </a>";
		echo "</p>";
		echo "</div>";

	}
		
?>
<?php
	if(empty($_SESSION['logname']))
	{
		echo "<nav id='topNavigation'>";
		echo "<div class='navi'>";
		echo "<ul>";
		echo "<li><a href= http://localhost/salon/>Home</a></li>";
		echo "<li><a href= http://localhost/salon/about/>About Us</a></li>";
		echo "<li><a href= http://localhost/salon/services/>Services</a></li>";
		echo "<li><a href= http://localhost/salon/gallery>Gallery</a></li>";
		echo "<li><a href= http://localhost/salon/faq>FAQ</a></li>";
		echo "<li><a href= http://localhost/salon/contact>Contact Us</a></li>";
		echo "<li style='float:right'><a href= http://localhost/salon/login>Login/Register</a></li>";
		echo "</ul>";
		echo "</div>";
		echo "</nav>";
		
	}
	else if($_SESSION['logname'] == "admin")
	{
		echo "<nav id='topNavigation'>";
		echo "<div class='navi'>";
		echo "<ul>";
		echo "<li><a href= http://localhost/salon/>Home</a></li>";
		echo "<li><a href= http://localhost/salon/about/>About Us</a></li>";
		echo "<li><a href= http://localhost/salon/services/>Services</a></li>";
		echo "<li><a href= http://localhost/salon/gallery>Gallery</a></li>";
		echo "<li><a href= http://localhost/salon/faq>FAQ</a></li>";
		echo "<li><a href= http://localhost/salon/contact>Contact Us</a></li>";
		echo "<li style='float:right'><a href= http://localhost/salon/admin/adminEdit.php>Edit/Del Booking</a></li>";
		echo "</ul>";
		echo "</div>";
		echo "</nav>";
	}
	
	else if(isset($_SESSION['logname']))
	{
		echo "<nav id='topNavigation'>";
		echo "<div class='navi'>";
		echo "<ul>";
		echo "<li><a href= http://localhost/salon/>Home</a></li>";
		echo "<li><a href= http://localhost/salon/about/>About Us</a></li>";
		echo "<li><a href= http://localhost/salon/services/>Services</a></li>";
		echo "<li><a href= http://localhost/salon/gallery>Gallery</a></li>";
		echo "<li><a href= http://localhost/salon/faq>FAQ</a></li>";
		echo "<li><a href= http://localhost/salon/contact>Contact Us</a></li>";
		echo "<li style='float:right'><a href= http://localhost/salon/book>Book Appointment</a></li>";
		echo "</ul>";
		echo "</div>";
		echo "</nav>";		
	}
	
?>
