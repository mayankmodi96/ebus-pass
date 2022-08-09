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

<link rel="stylesheet" type="text/css" href="engine1/style.css"/>
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
						<a href="profile.php">
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
		<div class="container">
			<div class="col-md-12">
				<div class="col-md-6 hstyle form-box">
					<h4>Profile Details</h4>
					<?php
						echo "<a href='edit_profile.php?ide=$usid' style='float:right;margin-top:-43px;margin-right:10px;color:#fff;''>Edit</a>";
					?>
					<!-- <a href="edit_profile.php?ide=$check->id" style="float:right;margin-top:-43px;margin-right:10px;color:#fff;">Edit</a> -->
					<table class="table table-bordered table-hover">
					   <tr>
				        <th><h5>First Name</h5></th>
				        <th><h5><?php echo $fname;?></h5></th>
				      </tr>
				      <tr>
				        <td><h5>Last Name</h5></td>
				        <td><h5><?php echo $lname;?></h5></td>
				      </tr>
				      <tr>
				        <td><h5>User Name</h5></td>
				        <td><h5><?php echo $uname;?></h5></td>
				      </tr>
				      <tr>
				        <td><h5>email id</h5></td>
				        <td><h5><?php echo $emailid;?></h5></td>
				      </tr>
				      <tr>
				        <td><h5>Contact No</h5></td>
				        <td><h5><?php echo $contactno;?></h5></td>
				      </tr>
					</table>	
				</div>
				<div class="col-md-6 hstyle form-box">
					<h4>Personal Details</h4>
					<?php 

						$profile = mysql_query("SELECT * FROM stu_reg_pass WHERE id='$usid'");
						$prow = mysql_fetch_row($profile);

						$employee = mysql_query("SELECT * FROM emp_reg_pass WHERE id='$usid'");
						$erow = mysql_fetch_row($employee);

						$senior = mysql_query("SELECT * FROM sen_reg_pass WHERE id='$usid'");
						$senrow = mysql_fetch_row($senior);

						$handistudent = mysql_query("SELECT * FROM stu_handi_pass WHERE id='$usid'");
						$handisturow = mysql_fetch_row($handistudent);

						$handiemployee = mysql_query("SELECT * FROM emp_handi_pass WHERE id='$usid'");
						$handiemprow = mysql_fetch_row($handiemployee);
						
						if($prow)
						{
							echo "<a href='edit_student.php?cide=$sid' style='float:right;margin-top:-43px;margin-right:10px;color:#fff'>Edit</a>";
					?>		
							<table class="table table-bordered table-hover">
						  <tr>
					        <th><h5>Pass id</h5></th>
					        <th><h5><?php echo $sid; ?></h5></th>
					      </tr>
						  <tr>
					        <th><h5>First Name</h5></th>
					        <th><h5><?php echo $firstname; ?></h5></th>
					      </tr>
					      <tr>
					        <td><h5>Middle Name</h5></td>
					        <td><h5><?php echo $middlename; ?></h5></td>
					      </tr>
					      <tr>
					        <td><h5>Last Name</h5></td>
					        <td><h5><?php echo $lastname; ?></h5></td>
					      </tr>
					      <tr>
					        <td><h5>Gender</h5></td>
					        <td><h5><?php echo $gender; ?></h5></td>
					      </tr>
					      <tr>
					        <td><h5>Date of Birth</h5></td>
					        <td><h5><?php echo $dob; ?></h5></td>
					      </tr>
					      <tr>
					        <td><h5>Address</h5></td>
					        <td><h5><?php echo $address; ?></h5></td>
					      </tr>
					      <tr>
					        <td><h5>Pincode</h5></td>
					        <td><h5><?php echo $pin; ?></h5></td>
					      </tr>
					      <tr>
					        <td><h5>Mobile number</h5></td>
					        <td><h5><?php echo $cno; ?></h5></td>
					      </tr>
					      <tr>
					        <td><h5>email id</h5></td>
					        <td><h5><?php echo $eid; ?></h5></td>
					      </tr>
					      <tr>
					        <td><h5>Adharcard number</h5></td>
					        <td><h5><?php echo $adharno; ?></h5></td>
					      </tr>
					</table>	
					
					<?php
						}
						else if($erow)
						{
						echo "<a href='edit_employee.php?eide=$empid' style='float:right;margin-top:-43px;margin-right:10px;color:#fff'>Edit</a>";
					 ?>

					<table class="table table-bordered table-hover">
						  <tr>
					        <th><h5>First Name</h5></th>
					        <th><h5><?php echo $firstname; ?></h5></th>
					      </tr>
					      <tr>
					        <td><h5>Middle Name</h5></td>
					        <td><h5><?php echo $middlename; ?></h5></td>
					      </tr>
					      <tr>
					        <td><h5>Last Name</h5></td>
					        <td><h5><?php echo $lastname; ?></h5></td>
					      </tr>
					      <tr>
					        <td><h5>Gender</h5></td>
					        <td><h5><?php echo $gender; ?></h5></td>
					      </tr>
					      <tr>
					        <td><h5>Date of Birth</h5></td>
					        <td><h5><?php echo $dob; ?></h5></td>
					      </tr>
					      <tr>
					        <td><h5>Address</h5></td>
					        <td><h5><?php echo $address; ?></h5></td>
					      </tr>
					      <tr>
					        <td><h5>Pincode</h5></td>
					        <td><h5><?php echo $pin; ?></h5></td>
					      </tr>
					      <tr>
					        <td><h5>Mobile number</h5></td>
					        <td><h5><?php echo $cno; ?></h5></td>
					      </tr>
					      <tr>
					        <td><h5>email id</h5></td>
					        <td><h5><?php echo $eid; ?></h5></td>
					      </tr>
					      <tr>
					        <td><h5>Adharcard number</h5></td>
					        <td><h5><?php echo $adharno; ?></h5></td>
					      </tr>
						</table> 	 
					 <?php
						}
						else if($senrow)
						{
						echo "<a href='edit_senior.php?side=$senid' style='float:right;margin-top:-43px;margin-right:10px;color:#fff'>Edit</a>";
					 ?>

					<table class="table table-bordered table-hover">
						  <tr>
					        <th><h5>First Name</h5></th>
					        <th><h5><?php echo $firstname; ?></h5></th>
					      </tr>
					      <tr>
					        <td><h5>Middle Name</h5></td>
					        <td><h5><?php echo $middlename; ?></h5></td>
					      </tr>
					      <tr>
					        <td><h5>Last Name</h5></td>
					        <td><h5><?php echo $lastname; ?></h5></td>
					      </tr>
					      <tr>
					        <td><h5>Gender</h5></td>
					        <td><h5><?php echo $gender; ?></h5></td>
					      </tr>
					      <tr>
					        <td><h5>Date of Birth</h5></td>
					        <td><h5><?php echo $dob; ?></h5></td>
					      </tr>
					      <tr>
					        <td><h5>Address</h5></td>
					        <td><h5><?php echo $address; ?></h5></td>
					      </tr>
					      <tr>
					        <td><h5>Pincode</h5></td>
					        <td><h5><?php echo $pin; ?></h5></td>
					      </tr>
					      <tr>
					        <td><h5>Mobile number</h5></td>
					        <td><h5><?php echo $cno; ?></h5></td>
					      </tr>
					      <tr>
					        <td><h5>email id</h5></td>
					        <td><h5><?php echo $eid; ?></h5></td>
					      </tr>
					      <tr>
					        <td><h5>Adharcard number</h5></td>
					        <td><h5><?php echo $adharno; ?></h5></td>
					      </tr>
						</table>
					
					<?php
						}
						else if($handisturow)
						{
						echo "<a href='edit_handi_stu.php?hside=$handistuid' style='float:right;margin-top:-43px;margin-right:10px;color:#fff'>Edit</a>";
					 ?>

					<table class="table table-bordered table-hover">
						  <tr>
					        <th><h5>First Name</h5></th>
					        <th><h5><?php echo $firstname; ?></h5></th>
					      </tr>
					      <tr>
					        <td><h5>Middle Name</h5></td>
					        <td><h5><?php echo $middlename; ?></h5></td>
					      </tr>
					      <tr>
					        <td><h5>Last Name</h5></td>
					        <td><h5><?php echo $lastname; ?></h5></td>
					      </tr>
					      <tr>
					        <td><h5>Gender</h5></td>
					        <td><h5><?php echo $gender; ?></h5></td>
					      </tr>
					      <tr>
					        <td><h5>Date of Birth</h5></td>
					        <td><h5><?php echo $dob; ?></h5></td>
					      </tr>
					      <tr>
					        <td><h5>Address</h5></td>
					        <td><h5><?php echo $address; ?></h5></td>
					      </tr>
					      <tr>
					        <td><h5>Pincode</h5></td>
					        <td><h5><?php echo $pin; ?></h5></td>
					      </tr>
					      <tr>
					        <td><h5>Mobile number</h5></td>
					        <td><h5><?php echo $cno; ?></h5></td>
					      </tr>
					      <tr>
					        <td><h5>email id</h5></td>
					        <td><h5><?php echo $eid; ?></h5></td>
					      </tr>
					      <tr>
					        <td><h5>Adharcard number</h5></td>
					        <td><h5><?php echo $adharno; ?></h5></td>
					      </tr>
						</table>

					<?php
						}
						else if($handiemprow)
						{
						echo "<a href='edit_handi_emp.php?heide=$handiempid' style='float:right;margin-top:-43px;margin-right:10px;color:#fff'>Edit</a>";
					 ?>

					<table class="table table-bordered table-hover">
						  <tr>
					        <th><h5>First Name</h5></th>
					        <th><h5><?php echo $firstname; ?></h5></th>
					      </tr>
					      <tr>
					        <td><h5>Middle Name</h5></td>
					        <td><h5><?php echo $middlename; ?></h5></td>
					      </tr>
					      <tr>
					        <td><h5>Last Name</h5></td>
					        <td><h5><?php echo $lastname; ?></h5></td>
					      </tr>
					      <tr>
					        <td><h5>Gender</h5></td>
					        <td><h5><?php echo $gender; ?></h5></td>
					      </tr>
					      <tr>
					        <td><h5>Date of Birth</h5></td>
					        <td><h5><?php echo $dob; ?></h5></td>
					      </tr>
					      <tr>
					        <td><h5>Address</h5></td>
					        <td><h5><?php echo $address; ?></h5></td>
					      </tr>
					      <tr>
					        <td><h5>Pincode</h5></td>
					        <td><h5><?php echo $pin; ?></h5></td>
					      </tr>
					      <tr>
					        <td><h5>Mobile number</h5></td>
					        <td><h5><?php echo $cno; ?></h5></td>
					      </tr>
					      <tr>
					        <td><h5>email id</h5></td>
					        <td><h5><?php echo $eid; ?></h5></td>
					      </tr>
					      <tr>
					        <td><h5>Adharcard number</h5></td>
					        <td><h5><?php echo $adharno; ?></h5></td>
					      </tr>
						</table>
	
					<?php
						}
					?>

				</div>
			</div>
		</div>
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
