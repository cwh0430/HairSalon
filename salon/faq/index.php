<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>XX Hair Salon - FAQ</title>
	<link rel="icon" href="../img/icon.png">
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="ourstyle.css">
	<link rel="stylesheet" href="../style/faq.css">
	<header id="pageHeader">

</head>

<body>
   
	<?php include('C:\wamp64\www\salon\includes\header.php'); ?>
	<?php include('C:\wamp64\www\salon\includes\navi.php'); ?>

	<main>
	<div class="faq">
        <h1 class="faq-heading">Frequently Asked Questions</h1>
		<div class="faq-img">
			<p> </p>
		</div>
	  <h2 class="faq-subheading">General Enquiry</h2>
        <section class="faq-container">
            <div class="faq-general-one">

                <!-- faq question -->
                <h1 class="faq-page">Do we have cancellation policy ?</h1>

                <!-- faq answer -->
                <div class="faq-body">
                    <p>We have adopted a 24-hour cancellation policy for all services, we appreciate your consideration to call and notify us if rescheduling needs to be made.</p>
                </div>
            </div>
            <hr class="hr-line">

            <div class="faq-general-two">

                <!-- faq question -->
                <h1 class="faq-page">What forms of payment do you accept ?</h1>

                <!-- faq answer -->

                <div class="faq-body">
                    <p>We accept cash, visa debit and credit cards, TNG E-wallet, Boost E-wallet, Grab Pay and Shopee Pay. Any other payment method will not be accepted.</p>
                </div>
            </div>
            <hr class="hr-line">


            <div class="faq-general-three">

                <!-- faq question -->
		    <h1 class="faq-page">What days are you open ?</h1>

                <!-- faq answer -->
                <div class="faq-body">
                       <p>We are open 7 days a week!<br>OPENING HOURS<br>Everyday: 10am - 8pm</p>
                </div>
            </div>
		<hr class="hr-line">


            <div class="faq-general-four">

                <!-- faq question -->
		    <h1 class="faq-page">What happens if i am late for my appointment ?</h1>

                <!-- faq answer -->
                <div class="faq-body">
                    <p>We understand there are always crazy traffic hours, if you are more than 15 minutes late, you may not get the service with the stylist you reserved, but please call to notify of delays and we will try our best to honor your appointment.</p>
                </div>
		    <hr class="hr-line">
            </div>

        </section>
	  <h2 class="faq-subheading">Hair Salon Enquiry</h2>
        <section class="faq-container">
            <div class="faq-salon-one">

                <!-- faq question -->
                <h1 class="faq-page">Can I wash my hair after a color service ?</h1>

                <!-- faq answer -->
                <div class="faq-body">
                    <p>Yes, as long as it is a shampoo for color care. This will help to protect your investment for a longer period of time.</p>
                </div>
            </div>
            <hr class="hr-line">

            <div class="faq-salon-two">

                <!-- faq question -->
                <h1 class="faq-page">Should I wash my hair before I do a color treatment ?</h1>

                <!-- faq answer -->

                <div class="faq-body">
                    <p>Yes, clean hair allows products to perform better. Hair build-up doesn’t allow products to perform at its 100%.</p>
                </div>
            </div>
            <hr class="hr-line">


            <div class="faq-salon-three">

                <!-- faq question -->
		    <h1 class="faq-page">Does your salon donate hair ?</h1>

                <!-- faq answer -->
                <div class="faq-body">
                    <p>While we do perform the haircuts for hair donations, the salon is not partnered with any donation services at this time. We leave it in the client’s hands to donate the hair to the service of their choosing.</p>
                </div>
            </div>
		<hr class="hr-line">


            <div class="faq-salon-four">

                <!-- faq question -->
		    <h1 class="faq-page">What happens if i am late for my appointment ?</h1>

                <!-- faq answer -->
                <div class="faq-body">
                    <p>For haircut appointments, we suggest coming back every 6 to 8 weeks. For color touch-ups, we suggest 4 to 6 weeks. For highlights, we suggest 6 to 8 weeks. For balayage, we suggest 8 to 10 weeks. For keratin treatments we suggest 3 to 4 months.</p>
                </div>
            <hr class="hr-line">
		<br><br><br>
            </div>
			
        </section>
	</div>
	<?php include('C:\wamp64\www\salon\includes\footer.php'); ?>
    </main>
    <script>
var faq = document.getElementsByClassName("faq-page");
var i;

for (i = 0; i < faq.length; i++) {
    faq[i].addEventListener("click", function () {
        /* Toggle between adding and removing the "active" class,
        to highlight the button that controls the panel */
        this.classList.toggle("active");

        /* Toggle between hiding and showing the active panel */
        var body = this.nextElementSibling;
        if (body.style.display === "block") {
            body.style.display = "none";
        } else {
            body.style.display = "block";
        }
    });
}
    </script>
</body>
</html>