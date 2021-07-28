<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/style.css" rel="stylesheet">
<title>Dufas</title>
</head>
<body>
<?php include('include/header.php')?>
<div class="wrapper">
<div class="inner_page">
<div class="about_us">
		<?php
			if ($_GET['sts'] == 'success') {
				echo '<div class="alert alert-success" role="alert" style="margin-top:10px;width: 97.5%;">Your contact information has been sent successfully</div>';
			}
			if ($_GET['sts'] == 'req') {
				echo '<div class="alert alert-danger" role="alert" style="margin-top:10px;width: 97.5%;">Please fill all required fields</div>';
			}
			if ($_GET['sts'] == 'fail') {
				echo '<div class="alert alert-danger" role="alert" style="margin-top:10px;width: 97.5%;">Error: In complete contact</div>';
			}
			if ($_GET['sts'] == 'wait') {
				echo '<div class="alert alert-danger" role="alert" style="margin-top:10px;width: 97.5%;">Error: Please Wait for 1 hour for next try</div>';
			}
        ?>

<div class="contact_us">
<h1>Contact Us</h1>
<div class="contact_form">
<form action="process-contact.php" method="post">
<input type="text" id="name" name="name" placeholder="Name*" required />
<input type="email" id="email" name="email" placeholder="E-mail*" required >
<input type="text" id="phone" name="phone" placeholder="Phone No*" required >
<textarea cols="43" rows="7" placeholder="Your Message" name="message" id="message" required>
</textarea>
<div class="contact_submit">
<input type="submit" value="Submit">
</div>
</form>
</div><!--contactform-->
</div><!--contact us-->
<div class="contact_address">
<h1>Get in Touch!</h1>
<p><span id="loc">Karachi</span></p>
<p>Office# 318, 3rd Floor</p>
<p>Mustafa Cloth Market,</p>
<p>M.A Jinnah Road</p>
<p><strong>Contact Person:</strong> Mr. Irfan Daud</p>
<p><strong>Phone:</strong> +92 21 3243 3388
<br />
             &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; +92 21 3240 0409 / 0410</p>
<p><strong>Fax:</strong>&nbsp; &nbsp; &nbsp; +92 21 3243 8833</p>
<p><strong>Cell:</strong>&nbsp; &nbsp; &nbsp; +92 333 217 7063</p>
<p><strong>E-mail:</strong>&nbsp; daud@dufassteel.com</p>

</div>
<div class="contact_address" style="margin-top:56px;">
<p><span id="loc">Islamabad</span></p>
<p>Office# 8, 2nd Floor</p>
<p>Anique Arcade</p>
<p>I-8 Markaz</p>
<p><strong>Contact Person:</strong> Mr. Usman Shahid</p>
<p><strong>Phone:</strong> +92 51 486 2426
<br />
             &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; +92 51 265 3128</p>
<p><strong>Fax:</strong>&nbsp; &nbsp; &nbsp; +92 51 486 2426</p>
<p><strong>Cell:</strong>&nbsp; &nbsp; &nbsp; +92 300 531 9439</p>
<p><strong>E-mail:</strong>&nbsp; usman@dufassteel.com
<Br />
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; shahid@dufassteel.com
</p>
</div>
<div class="map">
<h1>Find Us!</h1>
<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3318.3140501269263!2d73.07975430422971!3d33.72669440700985!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38dfbf789bd8f1d5%3A0x80ea4401cac8c40f!2sOld+Garden+Rd%2C+Islamabad%2C+Pakistan!5e0!3m2!1sen!2s!4v1431955148472" width="300" height="270" frameborder="0" style="border:0"></iframe>
</div>



</div><!--about us-->
</div><!--inner page-->
</div><!--wrapper-->

<?php include('include/footer.php');?>
</body>
</html>

