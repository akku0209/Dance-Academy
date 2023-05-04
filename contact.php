<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
?>
<!DOCTYPE html>
<html lang="zxx">
<head>
<title>Amaze Dance Academy | Contact Us</title>

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--// Meta tag Keywords -->
<!-- css files -->
<link rel="stylesheet" href="css/bootstrap.css"> <!-- Bootstrap-Core-CSS -->
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" /> <!-- Style-CSS --> 
<link rel="stylesheet" href="css/font-awesome.css"> <!-- Font-Awesome-Icons-CSS -->
<!-- //css files -->
<link href="//fonts.googleapis.com/css?family=Alex+Brush&amp;subset=latin-ext" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Contrail+One" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Farsan&amp;subset=gujarati,latin-ext,vietnamese" rel="stylesheet">
</head>
<body> 
<!-- banner -->
	<div class="banner banner-2">
		<?php include_once('includes/header.php');?>
	
	<div class="clearfix"> </div>
	<!-- //Nav -->
<!-- //banner -->	
<!-- mail -->
<div class="mail" id="mail">
	<div class="container">
		<h2 class="title-w3l">Contact Us</h2>
		<div class="agileinfo_mail_grids">
			<div class="col-md-5 contact-left-w3ls">
				<h3>Contact Info</h3>
				 <?php

$ret=mysqli_query($con,"select * from tblpage where PageType='contactus' ");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
				<div class="visit">
					<div class="col-md-2 col-sm-2 col-xs-2 contact-icon-wthree">
						<span class="glyphicon glyphicon-home" aria-hidden="true"></span>
					</div>
					<div class="col-md-10 col-sm-10 col-xs-10 contact-text-agileinf0">
						<h4>Visit us</h4>
						<p><?php  echo $row['PageDescription'];?></p>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="mail-w3">
					<div class="col-md-2 col-sm-2 col-xs-2 contact-icon-wthree">
						<span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
					</div>
					<div class="col-md-10 col-sm-10 col-xs-10 contact-text-agileinf0">
						<h4>Mail us</h4>
						<p><?php  echo $row['Email'];?></p>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="call">
					<div class="col-md-2 col-sm-2 col-xs-2 contact-icon-wthree">
						<span class="glyphicon glyphicon-phone" aria-hidden="true"></span>
					</div>
					<div class="col-md-10 col-sm-10 col-xs-10 contact-text-agileinf0">
						<h4>Call us</h4>
						<p>+<?php  echo $row['MobileNumber'];?></p>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="visit">
					<div class="col-md-2 col-sm-2 col-xs-2 contact-icon-wthree">
						<span class="glyphicon glyphicon-time" aria-hidden="true"></span>
					</div>
					<div class="col-md-10 col-sm-10 col-xs-10 contact-text-agileinf0">
						<h4>Work hours</h4>
						<p><?php  echo $row['Timing'];?></p>
					</div>
					<div class="clearfix"></div>
				</div>
			</div><?php } ?>
			<div class="col-md-7 agileinfo_mail_grid_right">
			<img src="images/two.jpg" alt="" width="500" height="300" class="img-responsive"/>	
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
</div>
<!-- //mail -->
</div>
<?php include_once('includes/footer.php');?>

<!-- js-scripts -->			
<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script> <!-- Necessary-JavaScript-File-For-Bootstrap --> 
<!-- //js -->
<!-- menu -->
<script type="text/javascript" src="js/main.js"></script>
<!-- //menu -->
<!-- smooth scrolling -->
<script src="js/SmoothScroll.min.js"></script>
<!-- //smooth scrolling -->
<!-- //js-scripts -->

</body>
</html>