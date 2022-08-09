<?php
	
	include('db/config.php');
	include('db/session.php');

	$stselect = mysql_query("SELECT * FROM stu_reg_pass WHERE stu_reg_pass_id = '$sid'");
	$stdprow = mysql_fetch_object($stselect);
	if(!$stdprow)
	{
		echo "<script>alert('You are Not Apply Pass, so Preview is Not Available');document.location='home.php'</script>";
	}
	else
	{
		header('location:epass stu.php');
	}
	
	$empselect = mysql_query("SELECT * FROM emp_reg_pass WHERE emp_reg_pass_id = '$empid'");
	$emprow = mysql_fetch_object($empselect);
	if(!$emprow)
	{
			echo "<script>alert('You are Not Apply Pass, so Preview is Not Available')</script>";				
	}
	else
	{
			header('location:epass emp.php');
	}

	$senselect = mysql_query("SELECT * FROM sen_reg_pass WHERE sen_reg_pass_id = '$senid'");
	$senrow = mysql_fetch_object($senselect);
	if(!$senrow)
	{
			echo "<script>alert('You are Not Apply Pass, so Preview is Not Available')</script>";				
	}
	else
	{
			header('location:epass sen.php');
	}

	$handistuselect = mysql_query("SELECT * FROM stu_handi_pass WHERE stu_handi_pass_id = '$handistuid'");
	$handisturow = mysql_fetch_object($handistuselect);
	if(!$handisturow)
	{
			echo "<script>alert('You are Not Apply Pass, so Preview is Not Available')</script>";				
	}
	else
	{
			header('location:epass handi stu.php');
	}

	$handiempselect = mysql_query("SELECT * FROM emp_handi_pass WHERE emp_handi_pass_id = '$handiempid'");
	$handiemprow = mysql_fetch_object($handiempselect);
	if(!$handiemprow)
	{
			echo "<script>alert('You are Not Apply Pass, so Preview is Not Available')</script>";				
	}
	else
	{
			header('location:epass handi emp.php');
	}


?>