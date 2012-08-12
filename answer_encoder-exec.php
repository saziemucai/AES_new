<?php
	//Start session
	session_start();
	
	//Include database connection details
	require_once('config1.php');

	$number1 = $_GET['number1'];
	$number2 = $_GET['number2'];
	$number3 = $_GET['number3'];
	$number4 = $_GET['number4'];
	$number5 = $_GET['number5'];
	$number6 = $_GET['number6'];
	$number7 = $_GET['number7'];
	$number8 = $_GET['number8'];
	$number9 = $_GET['number9'];
	$number10 = $_GET['number10'];
	$answer = $_GET['answer'];
	
	//Create INSERT query
	$qry = "INSERT INTO answerkey(number, answer) VALUES('$number','$answer')";
	$result = @mysql_query($qry);
	
	//Check whether the query was successful or not
	if($result) {
		header("location: teacher_home.php");
		exit();
	}else {
		die("Query failed");
	}
?>