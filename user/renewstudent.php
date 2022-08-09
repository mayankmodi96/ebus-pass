<?php

include("db/session.php");
include('db/config.php');
if(isset($_POST['save']))
{
	$scname = $_POST['scname'];
	$scaddress = $_POST['scaddress'];
	$sc_cno = $_POST['sc_cno'];
	$tstart = $_POST['tstart'];
	$tend = $_POST['tend'];
	$place_sit = $_POST['place_sit'];
	$change_place = $_POST['change_place'];
	$alight_place = $_POST['alight_place'];
	$trano = $_POST['trano'];
	$changeno = $_POST['changeno'];
	$passmonth = $_POST['passmonth'];
	$category = "Student";

	if(($_FILES['bonofile']['type'] == 'image/png')
					|| ($_FILES['bonofile']['type'] == 'image/jpeg')
					|| ($_FILES['bonofile']['type'] == 'image/pjpeg')
					&& ($_FILES['bonofile']['size'] < 5000000))
	{
		if(file_exists('student/bonofiedphoto/'.$_FILES['bonofile']['name']))
			{
				echo $_FILES['bonofile']['name']."already exist";
			}
		else if(move_uploaded_file($_FILES['bonofile']['tmp_name'],
				'student/bonofiedphoto/'.$_FILES['bonofile']['name']))
			{
				$bonophoto = $_FILES['bonofile']['name'];
			}

		echo "<script>alert('Upload Successfully');</script>";
		
		$insert = mysql_query("INSERT INTO renew_student(stu_handi_pass_id,scname,scaddress,sc_cno,bono_image,tstart,tend,place_sit,change_place,alight_place,trano,changeno,passmonth)
									VALUES('$sid','$scname','$scaddress','$sc_cno','$bonophoto','$tstart','$tend','$place_sit','$change_place','$alight_place','$trano','$changeno','$passmonth')");

			if($insert)
			{
				echo "<script>alert('Record Save Successfully');</script>";

			}
			else
			{
				echo "<script>alert('Record Not Save, Try Again');</script>";									
			}
	}
	else
	{
		echo "<script>alert('Please Upload Only .png .jpg File and below 500 kb size')</script>";
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
		<!-- banner -->
		<div class="container hstyle">
			<h3>ReNew pass for Student</h3>
			<h5>* All details are mandatory field.</h5>
			<h5>* Image upload size less than(<) 500kb.</h5>
			<div class="col-md-12">
				<form method="post" name="renewstudent" enctype="multipart/form-data">
				 <?php
				 	$select = mysql_query("SELECT * FROM stu_reg_pass WHERE stu_reg_pass_id='$sid'");
				 	$passid = mysql_fetch_object($select);
				 ?>
					<div class="form-box">
						<div class="row">
							<div class="form-group col-md-4">
								<h4><?php echo "Your Pass id:   " .$passid->stu_reg_pass_id?></h4>
							</div>
						</div>
						<h4>Collage Details</h4>
					<div class="row">
						<div class="form-group col-md-12">
							<label for="scname">School/Collage Name:</label>
							<input type="text" class="form-control" name="scname" requried="" pattern="[A-Za- z]+ [0-9]+" value="<?php echo $passid->scname ?>"></input>
						</div>
						<div class="form-group col-md-12">
							<label for="scaddress">School/Collage address:</label>
							<input type="text" class="form-control" name="scaddress" requried="" pattern="[A-Za- z]+ [0-9]+" value="<?php echo $passid->scaddress ?>"></input>
						</div>
						<div class="form-group col-md-4">
							<label for="sc_cno">Mobile Number:</label>
							<input type="text" class="form-control" name="sc_cno" requried="" pattern="[0-9]{10}" value="<?php echo $passid->sc_cno ?>"></input>
						</div>
						<div class="form-group col-md-4">
							<label for="bono_image">New Bonafide cirtificate:</label>
							<input type="file" name="bonofile" requried=""></br>
						</div>
						<div class="form-group col-md-12">
							<label>The duration of the session Date:</label>
						</div>
						<div class="form-group col-md-4">
							<label for="tstart">Term Start Date:</label>
							<input type="date" class="form-control" name="tstart" requried="" value="<?php echo $passid->tstart ?>"></input>	
						</div>
						<div class="form-group col-md-4">
							<label for="tend">Term End Date:</label>
							<input type="date" class="form-control" name="tend" requried="" value="<?php echo $passid->tend ?>"></input>	
						</div>
					</div>
					<h4>Bus Details</h4>
					<div class="row">
						<div class="form-group col-md-4">
							<label for="place_sit">Place to sit:</label>
							<input type="text" class="form-control" name="place_sit" requried="" pattern="[A-Za-z]+" value="<?php echo $passid->place_sit ?>"></input>
						</div>
						<div class="form-group col-md-4">
							<label for="change_place">Changing Place:</label>
							<input type="text" class="form-control" name="change_place" requried="" pattern="[A-Za-z]+" value="<?php echo $passid->change_place ?>"></input>	
						</div>
						<div class="form-group col-md-4">
							<label for="alight_place">Alight place:</label>
							<input type="text" class="form-control" name="alight_place" requried="" pattern="[A-Za-z]+" value="<?php echo $passid->alight_place ?>"></input>
						</div>
					</div>
					<div class="row">
						<div class="form-group col-md-4">
							<label for="trano">Bus numbers for traveling... Maximum (6):</label>
							<input type="text" class="form-control" name="trano" requried="" pattern="[0-9]+" value="<?php echo $passid->trano ?>"></input>
						</div>
						<div class="form-group col-md-4">
							<label for="changeno">Bus numbers for Route Change... Maximum (6):</label>
							<input type="text" class="form-control" name="changeno" requried="" pattern="[0-9]+" value="<?php echo $passid->changeno ?>"></input>	
						</div>
					</div>
					<h4>Pass Details</h4>
					<div class="row">
						<div class="form-group col-md-4">
							<label for="passmonth">Select of pass month:</label>
							  <select class="form-control" name="passmonth">
							  	<option>Select month</option>
							  	<option value="1month">1 month</option>
							    <option value="3month">3 month</option>
							    <option value="6month">6 month</option>
							   </select>
						</div>
					</div>
					<div class="row">
						<div class="checkbox col-md-12">
							<label><input type="checkbox">I Have accpet all term and condition. <a href="term and condition">Read </a> Term and condition.</label>
						</div>
						</br>
						<div class="col-md-12" align="center">
							<button type="submit" class="btn btn-danger" name="save" value="save">SUBMIT</button>
						</div>
					</div>
					</div>
				</form>
			</div>
		</div>
		<!-- //banner-bottom -->
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