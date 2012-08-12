<?php
	//Start session
	session_start();
	
	//Include database connection details
	require_once('config1.php');
	
	$answer_id = $number;
	
	$number = $_POST['answer_letter'];
	
	
	//Create INSERT query
	$qry = "INSERT INTO answer_prelim(answer_letter) VALUES('$answer_letter)";
	$result = @mysql_query($qry);
	
	//Check whether the query was successful or not
	if($result) {
		header("location: teacher_home.php");
		exit();
	}else {
		die("Query failed");
	}
?>