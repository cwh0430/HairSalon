<html>
<head>
   
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>XX Hair Salon - Contact Us</title>
	<link rel="icon" href="../img/icon.png">
</head>
<link rel="stylesheet" href="../style/ourstyle.css">
<link rel="stylesheet" href="../style/contact.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
<body>

<?php include('../includes/header.php'); ?>
 <?php include('../includes/navi.php'); ?>

<div class ="contactus">
    <div class="transparentbox">
        <div class="info">
            <div><h1 id="contacth1">Contact Us</h1></div>
            <div><i class="fa-solid fa-location-dot"></i> 50, Jalan Abc, 56100, Msia</div>
            <div><i class="fa-solid fa-envelope"></i>abc@def.com</div>
            <div><i class="fa-solid fa-mobile"></i>+60-123456789</div>
            <div><i class="fa-solid fa-calendar-days"></i>Everyday 10AM - 8PM</div>
        </div>

    <div class="dropmsg">
       <div><h1>Drop Us A Message</h1></div>
        <form class="client-info" method="post" action="post-message.php" >
            <table>
               <tr>
                   <td><input type="text" name="name" placeholder="Your name" required id="inputstyle"></td>
               </tr>
               <tr>
                   <td><input type="email" id="inputstyle" name="email" placeholder="Your Email" required ></td>
                </tr>
                <tr>
                    <td><textarea name="msg" placeholder="Your opinion" required id="txtareastyle"></textarea></td>
                </tr>    
            </table>
            <input type="submit" value="Send" id="submitbtn">
        </form>
     </div>
    </div>
</div>

<?php include('../includes/footer.php'); ?>
</body>
</html>