<?php
	$conn = mysql_connect("localhost","root","");
	if($conn)
	{
		$db = mysql_select_db("ebuspass");
		if($db)
		{
		//	echo "<script>alert('Database connected')</script>";
		}
		else
		{
		//	echo "<script>alert('Database not connected')</script>";
		}
	}
	else
	{
		echo "<script>alert('MySql not connected')</script>";
	}
?>