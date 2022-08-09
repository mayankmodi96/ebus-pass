<?php
session_start();
if(session_destroy())
	{
		mysql_close($con);//cloing connection
		header('Location:../signin.php');//Rediarect to home page
	}
?>