<?php
	/*include('db/config.php');*/
	include('db/session.php');
	
	if($stpasscat == "Student")
	{
		header("location:renewstudent.php");
	}
	else if($emppasscat == "Employee")
	{
		header("location:renewemployee.php");
	}
	else if($senpasscat == "Senior")
	{
		header("location:renewsenior.php");
	}
	else if($handistupasscat == "handistudent")
	{
		header("location:renewhandistudent.php");
	}
	else if($handiemppasscat == "handiemployee")
	{
		header("location:renewhandiemployee.php");
	}
?>