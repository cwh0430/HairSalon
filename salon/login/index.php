<!DOCTYPE html>
<html>
<head>
    <title>XX Hair Salon - Login</title>
	<link rel="icon" href="../img/icon.png">
<link rel="stylesheet" href="../style/ourstyle.css">
<link rel="stylesheet" href="../style/login.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
 <?php include('C:\wamp64\www\salon\includes\header.php'); ?>
 <?php include('C:\wamp64\www\salon\includes\navi.php'); ?>
 
<div class="container">
  <form method ="post" action="action_page.php">
    <div class="row">
      <h2 style="text-align:center">Member Login</h2>
	  <h5 style="text-align:center">Please Log In To Proceed Booking Procedure...</h5>

		<p class="Pgap"> <hr> </p>
      <div class="col">

        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" required>
        <input type="submit" value="Login">
      </div>
      
    </div>
  </form>
</div>

<div class="bottom-container">
  <div class="row">
      <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Sign Up</button>
	  
  </div>
</div>
<div id="id01" class="modal">
  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
  <form class="modal-content" action="action_page1.php" method="post">
    <div class="container1">
      <h1>Sign Up</h1>
      <p style="padding-top:10px;">Please fill in this form to create an account.</p>
      <hr style="margin-bottom:10px;">
      <label for="email"><b>Email/Username</b></label>
      <input id ="username" type="text" placeholder="Enter Email/ Username" name="username" required>
	  <span id="availability"></span>
      <label for="psw"><b>Password</b>
      <input id="password" type="password" placeholder="Enter Password" name="password" required onkeyup='check();' />
	  </label>
      <label for="psw-repeat"><b>Confirm Password</b>
      <input id="psw-repeat" type="password"  placeholder="Repeat Password" name="psw-repeat" onkeyup='check();' />
	  <span id='message'></span>
      </label>
      <div class="clearfix">
        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
        <button type="submit" name="register" class="signupbtn" >Sign Up</button>

      </div>
    </div>
  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
var check = function() {
  if (document.getElementById('password').value ==
    document.getElementById('psw-repeat').value) {
    document.getElementById('message').style.color = 'green';
    document.getElementById('message').innerHTML = 'Matched... Please proceed to sign up';
  } else {
    document.getElementById('message').style.color = 'red';
    document.getElementById('message').innerHTML = 'Password did not match... Try again!';
  }
}

</script>


 <?php include('C:\wamp64\www\salon\includes\footer.php'); ?>
</body>
</html>
