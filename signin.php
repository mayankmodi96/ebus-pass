<?php
include('db/config.php');
	session_start();

	if(isset($_POST['login']))
	{

		$uname = $_POST['uname'];
		$pass = $_POST['pass'];
		
			$sql = mysql_query("SELECT * FROM registration WHERE uname='$uname' AND pass='$pass'");
			$row = mysql_num_rows($sql);
			if($row==1)
			{
				$_SESSION['login_user']=$uname;
				header('Location:user/home.php');
			}
			else
			{
				echo "<script>alert('Username or password is wrong');document.location='signin.php'</script>"; 	
			}
	}
?>

<!DOCTYPE html>
<html>
<head>
<title>ebuspass</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Forward Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<link href="css/lstyle.css" rel="stylesheet" type="text/css" media="all" />
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
					<div class="header-middle-logo">
						<a href="signin.php">
							eBusPass	
						</a>
					</div>
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
								<li><li>
								<li></li>
								<li></li>
							</ul>
							<div class="clearfix"> </div>
						</div>
						<div class="location">
						<!-- Start WOWSlider.com BODY section -->
						<div id="wowslider-container1">
						<div class="ws_images"><ul>
							<li><img src="data1/images/bus3.png" alt="bus1" title="bus1" id="wows1_0"/></li>
							<li><img src="data1/images/bus3.png" alt="bus2" title="bus2" id="wows1_1"/></li>
							<li><img src="data1/images/bus3.png" alt="bus3" title="bus3" id="wows1_2"/></li>
							<li><img src="data1/images/bus3.png" alt="bus4" title="bus4" id="wows1_3"/></li>
							<li><img src="data1/images/bus3.png" alt="bus5" title="bus5" id="wows1_4"/></li>
						</ul></div>
						<div class="ws_script" style="position:absolute;left:-99%"><a href="http://wowslider.net">jquery slider</a> by WOWSlider.com v8.7</div>
						<div class="ws_shadow"></div>
						</div>	
						<script type="text/javascript" src="engine1/wowslider.js"></script>
						<script type="text/javascript" src="engine1/script.js"></script>
						<!-- End WOWSlider.com BODY section -->
					
							<!--Bus Slider Stop-->
							<!-- <img src="images/bluebus.png">  -->
						</div>
						
					</div>
					<div class="clearfix"> </div>
				</div>
				<!-- //container -->
			</div>
			<div class="top-nav">
				<!-- container -->
				<div class="container">
					<span class="menu">MENU</span>
					<ul class="nav1">
						<li><a href="index.php">Home</a><li>                        
						<li><a href="service.php">Services</a><li>                 
						<li><a href="travelfare.php">Travel fare</a><li>                
						<li><a href="gallery.php">Gallery</a><li>                   
       					<li><a href="contact.php">Contact</a></li>
       					<li><a href="signin.php">Sign in</a><li>

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
		<!-- registration start -->
		<div class="contact">
			<!-- container -->
			<div class="container">
				<div class="col-md-4">

				</div>
				<div class="col-md-4">
					<form method="post" name="register">
						<div class="contact-info">
							<h3 class="c-text">Sign in</h3>
						</div>
	 					<div class="form-group">
	    					<label for="uname">User Name:</label>
	    					<input type="text" class="form-control" name="uname" required="" pattern="[A-Za- z]+ [0-9]+">
	  					</div>
	  					<div class="form-group">
	    					<label for="pass">Password:</label>
	    					<input type="password" class="form-control" name="pass" required="">
	  					</div> 
	  					<div align="center">
	  						<button type="submit" class="btn btn-danger" value="Sign in" name="login">Signin</button>
						</div>
						<div class="contact-info">
							<button type="button" class="btn btn-link"><a href="signup.php">Create account? New user</a></button>
							<button type="button" class="btn btn-link"><a href="forget.php">Forget Password</a></button>
	  					</div>
	  				</form>
	  			</div>
	  			<div class="col-md-4">

				</div>
	  		</div>
			<!-- //container -->
		</div>
		<!-- registration end -->
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
								<a href="index.php" style="font-size:18px; font-family: 'PoiretOne-Regular'; color:#fff; padding:8px;">Home</a>                        
								<a href="service.php" style="font-size:18px; font-family: 'PoiretOne-Regular';
								font-family: 'PoiretOne-Regular'; color:#fff; padding:8px;">Services</a>                
								<a href="travelfare.php" style="font-size:18px; font-family: 'PoiretOne-Regular'; color:#fff; padding:8px;">Travel fare</a>
								<a href="gallery.php" style="font-size:18px; font-family: 'PoiretOne-Regular';
								color:#fff; padding:8px;">Gallery</a>                   
			       				<a href="contact.php" style="font-size:18px; font-family: 'PoiretOne-Regular';
			       				color:#fff; padding:8px;">Contact</a>
			       				<a href="signin.php" style="font-size:18px; font-family: 'PoiretOne-Regular'; color:#fff; padding:8px;">Sign in</a>
								<div class="clearfix"> </div>
								
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