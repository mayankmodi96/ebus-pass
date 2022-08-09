<?php
	include("db/config.php");
	session_start();

	$user_check = $_SESSION['login_user']; //stornig session
	
	$ses_sql = mysql_query("SELECT * FROM registration WHERE uname='$user_check'");
	$row = mysql_fetch_assoc($ses_sql);
	
	if($row)
	{
	
	$usid = $row['id'];
	$login_session = $row['uname'];
	$fname = $row['fname'];
	$lname = $row['lname'];
	$uname = $row['uname'];
	$emailid = $row['emailid'];
	$contactno = $row['contactno'];
	}
	
	if(!isset($login_session))
	{
		mysql_close($con);//cloing connection
		header('Location:../signin.php');//Rediarect to login page
	}

	$select_stu = mysql_query("SELECT * FROM stu_reg_pass WHERE id='$usid'");
	$check = mysql_fetch_object($select_stu);
	if($check)
	{
		$sid = $check->stu_reg_pass_id;
		$stpasscat = $check->pass_category;
		$firstname = $check->fname;
		$middlename = $check->mname;
		$lastname = $check->lname;
		$gender = $check->gender;
		$dob = $check->dob;
		$address = $check->address;
		$pin = $check->pin;
		$cno = $check->cno;
		$eid = $check->eid;
		$adharno = $check->adharno;
		$scname = $check->scname;
		$scaddress = $check->scaddress;
		$sc_cno = $check->sc_cno;
		$tstart = $check->tstart;
		$tend = $check->tend;
		$place_sit = $check->place_sit;
		$change_place = $check->change_place;
		$alight_place = $check->alight_place;
		$trano = $check->trano;
		$changeno = $check->changeno;
	}

	$select_emp = mysql_query("SELECT * FROM emp_reg_pass WHERE id='$usid'");
	$check1 = mysql_fetch_object($select_emp);
	if($check1)
	{
		$empid = $check1->emp_reg_pass_id;
		$emppasscat = $check1->category;
		$firstname = $check1->fname;
		$middlename = $check1->mname;
		$lastname = $check1->lname;
		$gender = $check1->gender;
		$dob = $check1->dob;
		$address = $check1->address;
		$pin = $check1->pin;
		$cno = $check1->cno;
		$eid = $check1->eid;
		$adharno = $check1->adharno;
		$place_sit = $check1->place_sit;
		$change_place = $check1->change_place;
		$alight_place = $check1->alight_place;
		$trano = $check1->trano;
		$changeno = $check1->changeno;
		$jstart = $check1->jstart;
		$jend = $check1->jend;
	}

	$select_sen = mysql_query("SELECT * FROM sen_reg_pass WHERE id='$usid'");
	$check2 = mysql_fetch_object($select_sen);
	if($check2)
	{
		$senid = $check2->sen_reg_pass_id;
		$senpasscat = $check2->category;
		$firstname = $check2->fname;
		$middlename = $check2->mname;
		$lastname = $check2->lname;
		$gender = $check2->gender;
		$dob = $check2->dob;
		$address = $check2->address;
		$pin = $check2->pin;
		$cno = $check2->cno;
		$eid = $check2->eid;
		$adharno = $check2->adharno;
		$proof_id = $check2->proof_id;
		$proof_home = $check2->proof_home;
	}

	$select_handi_stu = mysql_query("SELECT * FROM stu_handi_pass WHERE id='$usid'");
	$check4 = mysql_fetch_object($select_handi_stu);
	if($check4)
	{
		$handistuid = $check4->stu_handi_pass_id;
		$handistupasscat = $check4->category;
		$firstname = $check4->fname;
		$middlename = $check4->mname;
		$lastname = $check4->lname;
		$gender = $check4->gender;
		$dob = $check4->dob;
		$address = $check4->address;
		$pin = $check4->pin;
		$cno = $check4->cno;
		$eid = $check4->eid;
		$adharno = $check4->adharno;
		$scname = $check4->scname;
		$scaddress = $check4->scaddress;
		$sc_cno = $check4->sc_cno;
		$tstart = $check4->tstart;
		$tend = $check4->tend;
		$place_sit = $check4->place_sit;
		$change_place = $check4->change_place;
		$alight_place = $check4->alight_place;
		$trano = $check4->trano;
		$changeno = $check4->changeno;
	}

	$select_handi_emp = mysql_query("SELECT * FROM emp_handi_pass WHERE id='$usid'");
	$check3 = mysql_fetch_object($select_handi_emp);
	if($check3)
	{
		$handiempid = $check3->emp_handi_pass_id;
		$handiemppasscat = $check3->category;
		$firstname = $check3->fname;
		$middlename = $check3->mname;
		$lastname = $check3->lname;
		$gender = $check3->gender;
		$dob = $check3->dob;
		$address = $check3->address;
		$pin = $check3->pin;
		$cno = $check3->cno;
		$eid = $check3->eid;
		$adharno = $check3->adharno;
		$place_sit = $check3->place_sit;
		$change_place = $check3->change_place;
		$alight_place = $check3->alight_place;
		$trano = $check3->trano;
		$changeno = $check3->changeno;
		$jstart = $check3->jstart;
		$jend = $check3->jend;
	}
?>