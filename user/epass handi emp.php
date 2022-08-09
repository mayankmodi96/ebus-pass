<?php

include("db/session.php");
include('db/config.php');

?>
<!DOCTYPE html>
<html>
<head>
<title>ebuspass</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Forward Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<!-- Start Slider HEAD section -->

<link rel="stylesheet" type="text/css" href="engine1/style.css" />
</head>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

<script type="text/javascript" src="engine1/jquery.js"></script>

<!-- End  Slider HEAD section -->
<!-- js -->
<script src="js/jquery.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- js -->
<!-- start-smothsout-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
jQuery(document).ready(function($) {
	$(".scroll").click(function(event){		
		event.preventDefault();
	$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
});
});
</script>
<style type="text/css">
	video
	{
		width: 100%;
		height: auto;
	}
</style>
<!-- start-smoth-scrolling -->

	<body>
		<!-- header -->
		<div class="header">
			<div class="header-middle">
				<!-- container -->
				<div class="container">
				  <div class="col-md-4">	
					<div class="header-middle-logo">
						<a href="home.php">
							eBusPass	
						</a>
					</div>
				  </div>
				<div class="col-md-4">
					<div class="header-middle-right">
						<div class="phone">
							<span> </span>
							<ul>
								<li></li>
								<li></li>
								<li></li>
							</ul>
							<div class="clearfix"> </div>
						</div>
						<div class="location">
							
							<span> </span>
							<ul>
								<li></li>
								<li></li>
								<li></li>
							</ul>
							<div class="clearfix"> </div>	
						</div>	
					</div>
				</div>
				<div class="col-md-4">
						<div class="location">
							<?php
								echo "<font color='#dc3312' face='PoiretOne-Regular' size='5px'><b>Welcome ".$login_session."</b></font><br>";
								echo "<div class='sout' align='right'><a href='signout.php'>Signout</a></div>";
							?>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				<!-- //container -->
			</div>
			<div class="top-nav">
				<!-- container -->
				<div class="container">
					<span class="menu">MENU</span>
					<ul class="nav1">
						<li><a href="home.php">Home</a><li>                        
						<li><a href="profile.php">Profile</a><li>                 
						<li><a href="applypass.php">Apply Pass</a><li>                
						<li><a href="epass.php">e-pass</a><li>                   
       					<li><a href="feedback.php">Feedback</a></li>
       					<li><a href="renew.php">ReNew</a></li>
       					<div class="clearfix"> </div>
					</ul>
					<!-- script-for-menu -->
							 <script> 
							   $( "span.menu" ).click(function() {
								 $( "ul.nav1" ).slideToggle( 300, function() {
								 // Animation complete.
								  });
								 });
							
							</script>
						<!-- /script-for-menu -->
				</div>
				<!-- //container -->
			</div>
			<div class="blue"> </div>
		</div>
		<!-- //header -->
		<!-- Banner -->
			<div class="container hstyle">
				<h3>e pass</h3>
				<div class="col-md-3">
				</div>
				<div class="col-md-6">
				 <?php
				 	$select = mysql_query("SELECT * FROM emp_handi_pass WHERE emp_handi_pass_id='$handiempid'");
				 	$passid = mysql_fetch_object($select);
				 ?>
				  <div class="passstyle">
					<table class="table">
						<tr>
							<td><img src="images/logo.png" class="img-responsive" alt="Cinque Terre" height="80" width="90"></td>

							<td align="center">
								<p>ebuspass</p>
								Ahmedababd City Transport, Ahmedabad<br>
								<div class=""><?php echo "<b>$passid->category</b>"."Pass"; ?></div><br>
								<div class=""><?php echo "Pass Date:"; ?></div>
							</td>
							
							<td><img src="<?php echo 'handicap/employee/userphoto/'.$passid->user_image; ?>" class="img-responsive" alt="Cinque Terre" height="80" width="90"></td>
						</tr>
					</table>
					<table class="table">
						<tr>
							<td>Pass number</td>
							<td>:</td>
							<td><?php echo $passid->emp_handi_pass_id; ?></td>
							<td></td>
							<td></td>
							<td><?php echo "Date:";?></td>
						</tr>
						<tr>
							<td>Disibility id</td>
							<td>:</td>
							<td><?php echo $passid->did; ?></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td>Name</td>
							<td>:</td>
							<td><?php echo $passid->fname;?> <?php echo $passid->mname; ?> <?php echo $passid->lname; ?></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td>Address :</td>
							<td>:</td>
							<td><?php echo $passid->address; ?></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td>Bus no</td>
							<td>:</td>
							<td><?php echo $passid->trano ?></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td>Time</td>
							<td>:</td>
							<td><?php echo $passid->jstart."AM" ?> to <?php echo $passid->jend."PM" ?></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td>Card Fee</td>
							<td>:</td>
							<td>card: 50, pass: 200</td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td>Gender</td>
							<td>:</td>
							<td><?php echo $passid->gender; ?></td>
							<td></td>
							<td></td>
							<td>Admin Sign.</td>
						</tr>
					</table>
					</div>
				</div>
				<div class="col-md-3">
				</div>
			</div>
		<!-- //Banner -->
		<!-- footer -->
		<div class="footer">
			<!-- container -->
			<div class="container">
				<div class="footer-top">
						<div class="footer-grids">
							<div class="col-md-3 f-address">
								<h5>Address</h5>
								<ul>
									<li>Juna vadaj AMTS bus-stop,</li>
									<li>Ahmedabad-380013</li>
									<li>Telephone: +1 234 567 9871</li>
									<li>FAX: +1 234 567 9871</li>
									<li>E-mail : <a href="mailto:example@email.com">Example@mail.com</a></li>
								</ul>
							</div>
							<div class="col-md-6 f-address f-contact">
								<div style="margin-top:50px;">
								<a href="home.php" style="font-size:18px; font-family: 'PoiretOne-Regular'; color:#fff; padding:8px;">Home</a>                        
								<a href="profile.php" style="font-size:18px; font-family: 'PoiretOne-Regular';
								font-family: 'PoiretOne-Regular'; color:#fff; padding:8px;">Profile</a>                
								<a href="applypass.php" style="font-size:18px; font-family: 'PoiretOne-Regular'; color:#fff; padding:8px;">Apply Pass</a>
								<a href="epass.php" style="font-size:18px; font-family: 'PoiretOne-Regular';
								color:#fff; padding:8px;">e-pass</a>                   
			       				<a href="feedback.php" style="font-size:18px; font-family: 'PoiretOne-Regular';
			       				color:#fff; padding:8px;">Feedback</a>
			       				<a href="renew.php" style="font-size:18px; font-family: 'PoiretOne-Regular';
			       				color:#fff; padding:8px;">ReNew</a>
			       				</div>
							</div>
							<div class="col-md-3 footer-logo">
								<a href="index.html">ebuspass</a>
								<div class="footer-left">
									<ul>
										<li><a class="facebook" href="#"></a></li>
										<li><a class="twitter" href="#"></a></li>
										<li><a class="linked-in" href="#"></a></li>
										<li><a class="you-tube" href="#"></a></li>
									</ul>
								</div>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="footer-bottom">
							<div class="copyright">
								<p>Copyrights &copy 2017 ebuspass. Design by Mayank Modi & Nishil Patel</p>
							</div>
							<div class="clearfix"> </div>
						</div>
				</div>
			</div>
			<!-- //container -->
		</div>
		<!-- //footer -->
		<script type="text/javascript">
									$(document).ready(function() 
									{
										$().UItoTop({ easingType: 'easeOutQuart' });
									});
								</script>
									<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	<!-- content-Get-in-touch -->
	</body>
</html>