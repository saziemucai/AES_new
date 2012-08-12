<?php
	//Start session
	session_start();
	
	//Include database connection details
	require_once('config1.php');
	
	
	@$number1 = $_POST['number1'];
	@$number2 = $_POST['number2'];
	@$number3 = $_POST['number3'];
	@$number4 = $_POST['number4'];
	@$number5 = $_POST['number5'];
	@$number6 = $_POST['number6'];
	@$number7 = $_POST['number7'];
	@$number8 = $_POST['number8'];
	@$number9 = $_POST['number9'];
	@$number10 = $_POST['number10'];
	@$answer = $__POST['answer'];
	
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