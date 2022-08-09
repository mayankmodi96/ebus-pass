<?php
	session_start();

	include('config.php');

$uname = $_SESSION['login_user'];

$result = mysql_query("SELECT * from ad_login WHERE username = '$uname'");
$row = mysql_fetch_object($result);
if($row)
{
	$login_session = $row->username;
}
else
{
	header('location:../index.php');
}
?>