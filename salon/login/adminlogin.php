<!DOCTYPE html>
<html>
<head>
    <title>XX Hair Salon - Admin Login</title>
	<link rel="icon" href="../img/icon.png">
<link rel="stylesheet" href="../style/ourstyle.css">
<link rel="stylesheet" href="../style/login.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
 <?php include('C:\wamp64\www\salon\includes\header.php'); ?>
 <?php include('C:\wamp64\www\salon\includes\navi.php'); ?>
 
<div class="container">
  <form method ="post" action="admin_page.php">
    <div class="row">
      <h2 style="text-align:center">Admin Login</h2>

		<p class="Pgap"> <hr> </p>
      <div class="col">

        <input type="text" name="adminuser" placeholder="Username" required>
        <input type="password" name="adminpass" placeholder="Password" required>
        <input type="submit" value="Login">
      </div>
      
    </div>
  </form>
</div>


 <?php include('C:\wamp64\www\salon\includes\footer.php'); ?>
</body>
</html>
