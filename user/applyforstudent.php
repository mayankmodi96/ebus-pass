<?php
include("db/session.php");
if(isset($_POST['save']))
{
	$fname = $_POST['fname'];
	$mname = $_POST['mname'];
	$lname = $_POST['lname'];
	$gender = $_POST['gender'];
	$dob = $_POST['dob'];
	$address = $_POST['address'];
	$pin = $_POST['pin'];
	$cno = $_POST['cno'];
	$eid = $_POST['eid'];
	$adharno = $_POST['adharno'];
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

	if((($_FILES['userfile']['type'] == 'image/png')
	|| ($_FILES['userfile']['type'] == 'image/jpeg')
	|| ($_FILES['userfile']['type'] == 'image/pjpeg')
	&& ($_FILES['userfile']['size'] < 5000000)) 

	&&
	(($_FILES['adharfile']['type'] == 'image/png')
			|| ($_FILES['adharfile']['type'] == 'image/jpeg')
			|| ($_FILES['adharfile']['type'] == 'image/pjpeg')
			&& ($_FILES['adharfile']['size'] < 5000000))
	
	&&
	(($_FILES['bonofile']['type'] == 'image/png')
					|| ($_FILES['bonofile']['type'] == 'image/jpeg')
					|| ($_FILES['bonofile']['type'] == 'image/pjpeg')
					&& ($_FILES['bonofile']['size'] < 5000000))) 
	{
		if(file_exists('student/userphoto/'.$_FILES['userfile']['name']))
		{
				echo $_FILES['userfile']['name']."already exist";
			if(file_exists('student/adharphoto/'.$_FILES['adharfile']['name']))
			{
				echo $_FILES['adharfile']['name']."already exist";
			}
			if(file_exists('student/bonofiedphoto/'.$_FILES['bonofile']['name']))
			{
				echo $_FILES['bonofile']['name']."already exist";
			}
		}
		else if(move_uploaded_file($_FILES['userfile']['tmp_name'],
				'student/userphoto/'.$_FILES['userfile']['name']))
		{
				$uphoto = $_FILES['userfile']['name'];

			if(move_uploaded_file($_FILES['adharfile']['tmp_name'],
				'student/adharphoto/'.$_FILES['adharfile']['name']))
			{
				$aphoto = $_FILES['adharfile']['name'];
			}
			if(move_uploaded_file($_FILES['bonofile']['tmp_name'],
				'student/bonofiedphoto/'.$_FILES['bonofile']['name']))
			{
				$bonophoto = $_FILES['bonofile']['name'];
			}

			echo "<script>alert('Upload Successfully');</script>";

			$insert = mysql_query("INSERT INTO stu_reg_pass(id,pass_category,fname,mname,lname,gender,dob,address,pin,cno,eid,adharno,user_image,adhar_image,scname,scaddress,sc_cno,bono_image,tstart,tend,place_sit,change_place,alight_place,trano,changeno,passmonth)
									VALUES('$usid','$category','$fname','$mname','$lname','$gender','$dob','$address','$pin','$cno','$eid','$adharno','$uphoto','$aphoto','$scname','$scaddress','$sc_cno','$bonophoto','$tstart','$tend','$place_sit','$change_place','$alight_place','$trano','$changeno','$passmonth')");

			if($insert)
			{
				echo "<script>alert('Record Save Successfully');</script>";

			}
			else
			{
				echo "<script>alert('Record Not Save, Try Again');</script>";									
			}							
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
						<a href="applyforstudent.php">
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
			<h3>Apply pass for Student</h3>
			<h5>* All details are mandatory field.</h5>
			<h5>* Image upload size less than(<) 500kb.</h5>
			<div class="col-md-12">
			<form method="post" name="applyforstudent" enctype="multipart/form-data">
				<div class="form-box">
					<h4>Personal Details</h4>
					<div class="row">
						<div class="form-group col-md-4">
							<label for="fname">FirstName:</label>
							<input type="text" class="form-control" name="fname" requried="" pattern="[A-Za- z]+" title="Only ALphabet Character is Valid"></input>
						</div>
						<div class="form-group col-md-4">
							<label for="mname">MiddleName:</label>
							<input type="text" class="form-control" name="mname" requried="" pattern="[A-Za- z]+" title="Only ALphabet Character is Valid"></input>	
						</div>
						<div class="form-group col-md-4">
							<label for="lname">LastName:</label>
							<input type="text" class="form-control" name="lname" requried="" pattern="[A-Za- z]+" title="Only ALphabet Character is Valid"></input>
						</div>
					</div>
					<div class="row">
						<div class="form-group col-md-4">
							<label for="gender">Gender:</label></br>
						   <label class="radio-inline"><input type="radio" name="gender" value="male">Male</label>
						   <label class="radio-inline"><input type="radio" name="gender" value="female">Female</label>
						</div>
						<div class="form-group col-md-4">
							<label for="date">Date of Birth:</label>
							<input type="date" class="form-control" name="dob" requried="" title="Please enter valid date"></input>	
						</div>
						<div class="form-group col-md-4">
							<label for="address">Address:</label>
							<input type="text" class="form-control" name="address" requried="" pattern="[A-Za- z]+ [0-9]+"></input>
						</div>
						<div class="form-group col-md-4">
							<label for="pin">Pincode:</label>
							<input type="text" class="form-control" name="pin" requried="" pattern="[0-9]{6}" title="Please enter only 6 digit"></input>
						</div>
						<div class="form-group col-md-4">
							<label for="cno">Mobile Number:</label>
							<input type="text" class="form-control" name="cno" requried="" pattern="[0-9]{10}" title="Please enter only 6 digit"></input>
						</div>
						<div class="form-group col-md-4">
							<label for="eid">email id:</label>
							<input type="email" class="form-control" name="eid" requried=""></input>
						</div>
						<div class="form-group col-md-4">
							<label for="adharno">Adhar card Number:</label>
							<input type="text" class="form-control" name="adharno" requried="" pattern="[0-9]{12}"></input>
						</div>
						<div class="form-group col-md-4">
							<label for="user_image">User image:</label>
							<input type="file" name="userfile" requried=""></input></br>
						</div>
						<div class="form-group col-md-4">
							<label for="adhar_image">Adhar card image:</label>
							<input type="file" name="adharfile" requried=""></br>
						</div>
					</div>
					<h4>Collage Details</h4>
					<div class="row">
						<div class="form-group col-md-12">
							<label for="scname">School/Collage Name:</label>
							<input type="text" class="form-control" name="scname" requried="" pattern="[A-Za- z]+"></input>
						</div>
						<div class="form-group col-md-12">
							<label for="scaddress">School/Collage address:</label>
							<input type="text" class="form-control" name="scaddress" requried="" pattern="[A-Za- z]+"></input>
						</div>
						<div class="form-group col-md-4">
							<label for="sc_cno">Mobile Number:</label>
							<input type="text" class="form-control" name="sc_cno" requried="" pattern="[0-9]{10}"></input>
						</div>
						<div class="form-group col-md-4">
							<label for="bono_image">Bonafide cirtificate:</label>
							<input type="file" name="bonofile" requried=""></br>
						</div>
						<div class="form-group col-md-12">
							<label>The duration of the session Date:</label>
						</div>
						<div class="form-group col-md-4">
							<label for="tstart">Term Start Date:</label>
							<input type="date" class="form-control" name="tstart" requried=""></input>	
						</div>
						<div class="form-group col-md-4">
							<label for="tend">Term End Date:</label>
							<input type="date" class="form-control" name="tend" requried=""></input>	
						</div>
					</div>
					<h4>Bus Details</h4>
					<div class="row">
						<div class="form-group col-md-4">
							<label for="place_sit">Starting place:</label>
							<input type="text" class="form-control" name="place_sit" requried="" pattern="[A-Za- z]+"></input>
						</div>
						<div class="form-group col-md-4">
							<label for="change_place">Changing Place:</label>
							<input type="text" class="form-control" name="change_place" requried="" pattern="[A-Za- z]+"></input>	
						</div>
						<div class="form-group col-md-4">
							<label for="alight_place">Alight place:</label>
							<input type="text" class="form-control" name="alight_place" requried="" pattern="[A-Za- z]+"></input>
						</div>
					</div>
					<div class="row">
						<div class="form-group col-md-4">
							<label for="trano">Bus numbers for traveling... Maximum (6):</label>
							<input type="text" class="form-control" name="trano" requried="" pattern="[0-9]+"></input>
						</div>
						<div class="form-group col-md-4">
							<label for="changeno">Bus numbers for Route Change... Maximum (6):</label>
							<input type="text" class="form-control" name="changeno" requried="" pattern="[0-9]+"></input>	
						</div>
					</div>
					<h4>Pass Details</h4>
					<div class="row">
						<div class="form-group col-md-4">
							<label for="passmonth">Select of pass month:</label>
							  <select class="form-control" name="passmonth">
							  	<option>Select month</option>
							  	<option value="1">1 month</option>
							    <option value="3">3 month</option>
							    <option value="6">6 month</option>
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
		<!-- banner -->
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
