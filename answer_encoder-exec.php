<?php
	//Start session
	session_start();
	
	//Include database connection details
	require_once('config1.php');
<<<<<<< HEAD

	$number1 = $_POST['number1'];
	$number2 = $_POST['number2'];
	$number3 = $_POST['number3'];
	$number4 = $_POST['number4'];
	$number5 = $_POST['number5'];
	$agree1 = $_POST['agree1'];
	$agree2 = $_POST['agree2'];
	$agree3 = $_POST['agree3'];
	$agree4 = $_POST['agree4'];
	$agree5 = $_POST['agree5'];
	
	$qry1('INSERT INTO prelim(prelim_id, number, answer) VALUES (1, '$number1', '$agree1')');
	$qry2('INSERT INTO prelim(prelim_id, number, answer) VALUES (2, '$number2', '$agree2')');
	$qry3('INSERT INTO prelim(prelim_id, number, answer) VALUES (3, '$number3', '$agree3')');
	$qry4('INSERT INTO prelim(prelim_id, number, answer) VALUES (4, '$number4', '$agree4')');
	$qry5('INSERT INTO prelim(prelim_id, number, answer) VALUES (5, '$number5', '$agree5')');
	
	$my_sql($qry1, $qry2, $qry3, $qry4, $qry5);
	?>
=======
	
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
>>>>>>> 96a6c0fb4083214844064966561eb6932c9df5be
