<html>

    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>XX Hair Salon - Home</title>
	<link rel="icon" href="img/icon.png">
	<link rel="stylesheet" href="style/ourstyle.css">
    <link rel="stylesheet" href="style/homepage.css">
    </head>

    <body>
    <?php include('includes\header.php'); ?>
    <?php include('includes\navi.php'); ?>

<div class="slideparent">
    <div class="slideshow">
        <div class="slides">

            <input type=radio name="radiobtn" id=radio1>
            <input type=radio name="radiobtn" id=radio2>
            <input type=radio name="radiobtn" id=radio3>
            <input type=radio name="radiobtn" id=radio4>

            <div class="slide first">
                <img src="img/hairpromo1.jpg" alt="hairpic.jpg">
            </div>
            <div class="slide">
                <img src="img/hairpromo2.jpg" alt="hairpic.jpg">
            </div>
            <div class="slide">
                <img src="img/hairpromo3.jpg" alt="hairpic.jpg">
            </div>
            <div class="slide">
                <img src="img/hairpromo4.jpg" alt="hairpic.jpg">
            </div>

            <div class="autoslide">
                <div class="autobtn1"></div>
                <div class="autobtn2"></div>
                <div class="autobtn3"></div>
                <div class="autobtn4"></div>
            </div>

            <div class="manualslide">
                <label for="radio1" class="manualbtn"></label>
                <label for="radio2" class="manualbtn"></label>
                <label for="radio3" class="manualbtn"></label>
                <label for="radio4" class="manualbtn"></label>
            </div>
        </div>
    </div>
</div>
<div class="homeContent">
<div class="booking">
    <p><b>"YOUR BEST CHOICE OF HAIR SALON"</b></p>
<?php
	if(empty($_SESSION['logname']))
	{
		echo "<button onClick='location.href =\"login/index.php\";' id='bookbtn' class='btnbook'><b>BOOK A SEAT NOW</b></button>";

	}
	
	else if(isset($_SESSION['logname']))
	{
		echo "<button onClick='location.href =\"book/index.php\";' id='bookbtn' class='btnbook'><b>BOOK A SEAT NOW</b></button>";
	}
	
?>

    
</div>

<div class="stylistdisplay">
    <p class=word1>MEET OUR</p>
    <p class="word2"><b>CREATIVE TEAM</b></p>
    <hr class="line">
</div>
</div>
<div class="stylists">
    <div class="stylist">
        <img class="styleimg" src="img/salondirector.jpg" alt="stylist.jpg">
        <div class="imgcaption"><b>Salon Director</b><br><b>Donnie Yen</b></div>
    </div>
    <div class="stylist">
        <img class="styleimg" src="img/salonmanager.jpg" alt="stylist.jpg">
        <div class="imgcaption"><b>Salon Manager</b><br><b>Victoria</b></div>

    </div>
    <div class="stylist">
        <img class="styleimg" src="img/salonassistant.jpg" alt="stylist.jpg">
        <div class="imgcaption"><b>Salon Assistant</b><br><b>Yang Mi</b></div>

    </div>

   
</div>

<?php include('includes\footer.php'); ?>
    </body>

    <script>
        var i=1;

        setInterval(setAuto,4000);
       
        function setAuto(){
            document.getElementById('radio'+i).checked = true;
            i++;
            if(i>4){
                i=1;
            }
        }
    </script>


</html>