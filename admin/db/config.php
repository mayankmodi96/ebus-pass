<?php
	$conn = mysql_connect("localhost","root","");
	
	if($conn)
	{
		$db = mysql_select_db("ebuspass",$conn);
		//echo "Database Connected";
	}
	else
	{
		echo "Database not connect";	
	}
?>