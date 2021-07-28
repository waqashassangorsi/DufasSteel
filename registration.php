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
<h1>Registration</h1>
<div class="registration_form">
<form action="" method="post">
<div class="label2">
<label>Name</label>
<input type="text" name="name" id="name" />
</div>
<div class="label2">
<label>Last Name</label>
<input type="text" name="lastname" id="lastname"/>
</div>
<div class="label2" style="width:600px; margin-bottom:4px;">
<label>Address</label>
<textarea required="" id="message" name="message"  rows="1" cols="77"></textarea>
</div>
<div class="label2">
<label>City</label>
<select id="subject" name="subject" class="form-control" required="required">
                                            <option value="na" selected="">Islamabad</option>
                                            <option value="service">Lahore</option>
                                            <option value="service">Peshware</option>
                                            
                                        </select>
</div>

<div class="label2">
<label>Telephone</label>
<input type="text" name="telephone" id="telephone"/>
</div>
<div class="label2">
<label>E-mail</label>
<input type="text" name="email" id="email"/>
</div>
<div class="sendbtn">
<input type="submit" class="button1" value="Send">
</div>
</form>
</div><!--registration form-->



</div><!--about us-->
</div><!--inner page-->
</div><!--wrapper-->

<?php include('include/footer.php');?>
</body>
</html>

