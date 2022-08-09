<?php
	include("db/config.php");
	session_start();

	$user_check = $_SESSION['login_user']; //stornig session
	
	$ses_sql = mysql_query("SELECT * FROM registration WHERE uname='$user_check'");
	//sql query to fetch complate information of user
	
	$row = mysql_fetch_assoc($ses_sql);
	echo $row;
	exit();
	$login_session = $row['uname'];
	
	//$name = $row['uname'];
	
	if(!isset($login_session))
	{
		mysql_close($con);//cloing connection
		header('Location:signin.php');//Rediarect to login page
	}
?>