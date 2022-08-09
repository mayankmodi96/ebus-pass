<?php
include("db/session.php");
include('db/config.php');

	$id = $_GET['hside'];

	$select = mysql_query("SELECT * FROM stu_handi_pass WHERE stu_handi_pass_id='$id'");

	$row = mysql_fetch_object($select);

	if(isset($_POST['update']))
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

		$sql = mysql_query("UPDATE stu_handi_pass SET fname='$fname',mname='$mname',lname='$lname',gender='$gender',dob='$dob',address='$address',pin='$pin',cno='$cno',eid='$eid',adharno='$adharno' WHERE stu_handi_pass_id='$id'");
				if($sql)
				{
					echo "<script>alert('Update successfully');document.location='profile.php'</script>";
				}
				else
				{
					echo "<script>alert('Data not update, please try agian');document.location='edit_profile.php'</script>";	
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
			<h3>Update for personal details</h3>
			<div class="col-md-12">
			<form method="post" name="applyforstudent" enctype="multipart/form-data">
				<div class="form-box">
					<h4>Personal Details</h4>
					<div class="row">
						<div class="form-group col-md-4">
							<label for="fname">FirstName:</label>
							<input type="text" class="form-control" name="fname" requried="" pattern="[A-Za- z]+" value="<?php echo $row->fname; ?>"></input>
						</div>
						<div class="form-group col-md-4">
							<label for="mname">MiddleName:</label>
							<input type="text" class="form-control" name="mname" requried="" pattern="[A-Za- z]+" value="<?php echo $row->mname; ?>"></input>	
						</div>
						<div class="form-group col-md-4">
							<label for="lname">LastName:</label>
							<input type="text" class="form-control" name="lname" requried="" pattern="[A-Za- z]+" value="<?php echo $row->lname; ?>"></input>
						</div>
					</div>
					<div class="row">
						<div class="form-group col-md-4">
							<label for="gender">Gender:</label></br>
						   <label class="radio-inline"><input type="radio" name="gender" value="male <?php echo $row->gender; ?>">Male</label>
						   <label class="radio-inline"><input type="radio" name="gender" value="female <?php echo $row->gender; ?>">Female</label>
						</div>
						<div class="form-group col-md-4">
							<label for="date">Date of Birth:</label>
							<input type="date" class="form-control" name="dob" requried="" value="<?php echo $row->dob; ?>"></input>	
						</div>
						<div class="form-group col-md-4">
							<label for="address">Address:</label>
							<input type="text" class="form-control" name="address" requried="" pattern="[A-Za- z]+ [0-9]+" value="<?php echo $row->address; ?>"></input>
						</div>
						<div class="form-group col-md-4">
							<label for="pin">Pincode:</label>
							<input type="text" class="form-control" name="pin" requried="" pattern="[0-9]{6}" value="<?php echo $row->pin; ?>"></input>
						</div>
						<div class="form-group col-md-4">
							<label for="cno">Mobile Number:</label>
							<input type="text" class="form-control" name="cno" requried="" pattern="[0-9]{10}" value="<?php echo $row->cno; ?>"></input>
						</div>
						<div class="form-group col-md-4">
							<label for="eid">email id:</label>
							<input type="email" class="form-control" name="eid" requried="" value="<?php echo $row->eid; ?>"></input>
						</div>
						<div class="form-group col-md-4">
							<label for="adharno">Adhar card Number:</label>
							<input type="text" class="form-control" name="adharno" requried="" pattern="[0-9]{12}" value="<?php echo $row->adharno; ?>"></input>
						</div>
					</div>
					<div class="row">
						</br>
						<div class="col-md-12" align="center">
							<button type="submit" class="btn btn-danger" name="update" value="update">Update</button>
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
