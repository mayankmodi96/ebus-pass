<?php
	session_start();
	
	if(session_destroy())		//Destroying all sessions
	{
		header("location:index.php");		//Redirecting to home page
	}
?>