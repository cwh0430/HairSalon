<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>XX Hair Salon - Logout Successfully</title>
	<link rel="icon" href="../img/icon.png">
<link rel="stylesheet" href="../style/ourstyle.css">
<link rel="stylesheet" href="../style/login.css">
</head>
<body>
<script>
 window.location.href ='http://localhost/salon/index.php';
</script>
<?php
// remove all session variables
session_unset();

// destroy the session
session_destroy();
?>
</body>
</html>