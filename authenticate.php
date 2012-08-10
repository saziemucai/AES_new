<?php
	//Check whether the session variable SESS_MEMBER_ID is present or not
	if(!isset($_SESSION['SESS_MEMBERS']) || (trim($_SESSION['SESS_MEMBERS']) == '')) {
		header("location: logout.php");
		exit();
	}
?>