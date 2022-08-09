<?php
include("db/session.php");
if(isset($_POST['save']))
{
	$top = $_POST['top'];
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
	$proof_id = $_POST['proof_id'];
	$proof_home = $_POST['proof_home'];
	$passmonth = $_POST['passmonth'];
	$category = "Senior";
	
	if((($_FILES['userfile']['type'] == 'image/png')
	|| ($_FILES['userfile']['type'] == 'image/jpeg')
	|| ($_FILES['userfile']['type'] == 'image/pjpeg')
	&& ($_FILES['userfile']['size'] < 5000000)) 

	&&
	(($_FILES['prooffile']['type'] == 'image/png')
			|| ($_FILES['prooffile']['type'] == 'image/jpeg')
			|| ($_FILES['prooffile']['type'] == 'image/pjpeg')
			&& ($_FILES['prooffile']['size'] < 5000000))
	&&
	(($_FILES['homefile']['type'] == 'image/png')
			|| ($_FILES['homefile']['type'] == 'image/jpeg')
			|| ($_FILES['homefile']['type'] == 'image/pjpeg')
			&& ($_FILES['homefile']['size'] < 5000000))) 
	{
		if(file_exists('seniorcitizen/userphoto/'.$_FILES['userfile']['name']))
		{
				echo $_FILES['userfile']['name']."already exist";
			if(file_exists('seniorcitizen/proofofsenior/'.$_FILES['prooffile']['name']))
			{
				echo $_FILES['prooffile']['name']."already exist";
			}
			if(file_exists('seniorcitizen/proofofResidence/'.$_FILES['homefile']['name']))
			{
				echo $_FILES['homefile']['name']."already exist";
			}
		}
		else if(move_uploaded_file($_FILES['userfile']['tmp_name'],
				'seniorcitizen/userphoto/'.$_FILES['userfile']['name']))
		{
				$uphoto = $_FILES['userfile']['name'];

			if(move_uploaded_file($_FILES['prooffile']['tmp_name'],
				'seniorcitizen/proofofsenior/'.$_FILES['prooffile']['name']))
			{
				$proofphoto = $_FILES['prooffile']['name'];
			}
			if(move_uploaded_file($_FILES['homefile']['tmp_name'],
				'seniorcitizen/proofofResidence/'.$_FILES['homefile']['name']))
			{
				$homephoto = $_FILES['prooffile']['name'];
			}

			echo "<script>alert('Upload Successfully');</script>";

			$insert = mysql_query("INSERT INTO sen_reg_pass(id,category,top,fname,mname,lname,gender,dob,address,pin,cno,eid,adharno,user_image,proof_id,proof_image,proof_home,home_image,passmonth)
				VALUES('$usid','$category','$top','$fname','$mname','$lname','$gender','$dob','$address','$pin','$cno','$eid','$adharno','$uphoto','$proof_id','$proofphoto','$proof_home','$homephoto','$passmonth')");

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
		echo "<script>alert('Please Upload Only .png .jpg File and below 500 kb siz')</script>";
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
			<h3>Apply pass for senior_citizen</h3>
			<h5>* All details are mandatory field.</h5>
			<h5>* Image upload size less than(<) 500kb.</h5>
			<div class="col-md-12">
			<form method="post" name="applyforsenior_citizen"  enctype="multipart/form-data">
				<div class="form-box">
					<h4>Type of pass</h4></br>
					<div class="row">
						<div class="form-group col-md-12">
						   <label class="radio-inline"><input type="radio" name="top" value="65year">65 Year above</label>
						   <label class="radio-inline"><input type="radio" name="top" value="75year">75 Year above</label>
						</div>
					</div>
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
							<label for="dob">Date of Birth:</label>
							<input type="date" class="form-control" name="dob" requried="" title="Please enter valid date"></input>	
						</div>
						<div class="form-group col-md-4">
							<label for="address">Address:</label>
							<input type="text" class="form-control" name="address" requried="" pattern="[A-Za- z]+ [0-9]+" title="Only ALphabet Character is Valid"></input>
						</div>
						<div class="form-group col-md-4">
							<label for="pin">Pincode:</label>
							<input type="text" class="form-control" name="pin" requried="" pattern="[0-9]{6}" title="Please enter only 6 digit"></input>
						</div>
						<div class="form-group col-md-4">
							<label for="cno">Mobile Number:</label>
							<input type="text" class="form-control" name="cno" requried="" pattern="[0-9]{10}" title="Please enter only 10 digit"></input>
						</div>
						<div class="form-group col-md-4">
							<label for="eid">Email id:</label>
							<input type="email" class="form-control" name="eid" requried="" title="please velid email_id: like abc@abc.com"></input>
						</div>
						<div class="form-group col-md-4">
							<label for="adharno">Adhar card Number:</label>
							<input type="text" class="form-control" name="adharno" requried="" pattern="[0-9]{12}" title="Please enter only 12 digit"></input>
						</div>
						<div class="form-group col-md-4">
							<label for="user_image">User image:</label>
							<input type="file" name="userfile" requried=""></input></br>
						</div>
					</div>
					<h4>Proof of age</h4>
					<div class="row">
						<div class="col-md-4">
							<label for="proof_id">Select proof of id:</label>
							  <select class="form-control" name="proof_id">
							  	<option>Select proof</option>
							    <option value="borncirti">Born cirtificate</option>
							    <option value="gov/amc hos cirti">Gov/AMC hospital cirtificate</option>
							    <option value="ssc cirti">S.S.C cirtificate</option>
							    <option value="pension">Pension card</option>
							    <option value="driving">Driving Licence</option>
							    <option value="passport">pasport</option>
							    <option value="school living">School living cirtifiacte</option>
							    <option value="retirment">Retirement card</option>
							    <option value="pancard">Pan card</option>
							    <option value="voterid">Voter id card</option>
							    <option value="adhar">Adhar card</option>
							  </select>
						</div>
						<div class="form-group col-md-4">
							<label for="proof_image">Selected proof image:</label>
							<input type="file" name="prooffile" requried=""></br>
						</div>
					</div>
					<div class="row">
						<div class="col-md-4">
							<label for="proof_home">Select proof of Residence:</label>
							  <select class="form-control" name="proof_home">
							  	<option>Select Proof</option>
							    <option value="voterid">Voter id card</option>
							    <option value="adhar">Adhar card</option>
							    <option value="passport">pasport</option>
							    <option value="driving">Driving Licence</option>
							    <option value="pancard">Pan card</option>
							    <option value="elecricbil">Elecric bil</option>
							  </select>
						</div>
						<div class="form-group col-md-4">
							<label for="home_image">Selected proof image:</label>
							<input type="file" name="homefile" requried=""></br>
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
							<label><input type="checkbox">I Have accpet all Term and condition. <a href="term and condition">Read </a> Term and condition.</label>
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
