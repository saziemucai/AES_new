<?php
	//Start session
	session_start();
	
	//Include database connection details
	require_once('config.php');
	
	//Array to store validation errors
	$errmsg_arr = array();
	
	//Validation error flag
	$errflag = false;
	
	//Connect to mysql server
	$link = mysql_connect(localhost, root);
	if(!$link) {
		die('Failed to connect to server: ' . mysql_error());
	}
	
	//Select database
	$db = mysql_select_db(aes);
	if(!$db) {
		die("Unable to select database");
	}
	
	//Function to sanitize values received from the form. Prevents SQL injection
	function clean($str) {
		$str = @trim($str);
		if(get_magic_quotes_gpc()) {
			$str = stripslashes($str);
		}
		return mysql_real_escape_string($str);
	}
	
	//Sanitize the POST values
	$name = clean($_POST['name']);
	$idno = clean($_POST['idno']);
	$courseyr = clean($_POST['courseyr']);
	$subject = clean($_POST['subject']);
	$section = clean($_POST['section']);
	$username = clean($_POST['username']);
	$password = clean($_POST['password']);
	$cpassword = clean($_POST['cpassword']);
	
	//Input Validations
	if($name == '') {
		$errmsg_arr[] = 'Name missing';
		$errflag = true;
	}
	if($idno == '') {
		$errmsg_arr[] = 'ID No. missing';
		$errflag = true;
	}
	if($courseyr == '') {
		$errmsg_arr[] = 'Course/Yr. missing';
		$errflag = true;
	}
	if($subject == '') {
		$errmsg_arr[] = 'Subject missing';
		$errflag = true;
	}
	if($section == '') {
		$errmsg_arr[] = 'Section missing';
		$errflag = true;
	}
	if($username == '') {
		$errmsg_arr[] = 'Username missing';
		$errflag = true;
	}
	if($password == '') {
		$errmsg_arr[] = 'Password missing';
		$errflag = true;
	}
	if($cpassword == '') {
		$errmsg_arr[] = 'Confirm password missing';
		$errflag = true;
	}
	if( strcmp($password, $cpassword) != 0 ) {
		$errmsg_arr[] = 'Passwords do not match';
		$errflag = true;
	}
	
	//Check for duplicate login ID
	if($username != '') {
		$qry = "SELECT * FROM members WHERE username='$username'";
		$result = mysql_query($qry);
		if($result) {
			if(mysql_num_rows($result) > 0) {
				$errmsg_arr[] = 'Login ID already in use';
				$errflag = true;
			}
			@mysql_free_result($result);
		}
		else {
			die("Query failed");
		}
	}
	
	//If there are input validations, redirect back to the registration form
	if($errflag) {
		$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
		session_write_close();
		header("location: register-form.php");
		exit();
	}

	//Create INSERT query
	$qry = "INSERT INTO members(name, idno, courseyr, subject, section, username, password) VALUES('$name','$idno','$courseyr','$subject','$section','$username','".md5($_POST['password'])."')";
	$result = @mysql_query($qry);
	
	//Check whether the query was successful or not
	if($result) {
		header("location: login-form.php");
		exit();
	}else {
		die("Query failed");
	}
?>