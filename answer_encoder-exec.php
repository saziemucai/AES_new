<?php
	//Start session
	session_start();
	
	//Include database connection details
	require_once('config1.php');

<<<<<<< HEAD
	$count = $_POST["count"];    // hidden value under the while loop

	for($i=1; $i<=$count; $i++)
	{
   	
   
   	$number = $_POST["number"][$i-1];
   	$answer = $_POST["answer"][$i-1];

   	mysql_query("insert into prelim(number, answer) values('$number, $answer')");

   	 echo mysql_error();

=======
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
	$answer1 = $_GET['answer1'];
	$answer1 = $_GET['answer2'];
	$answer1 = $_GET['answer3'];
	$answer1 = $_GET['answer4'];
	$answer1 = $_GET['answer5'];
	$answer1 = $_GET['answer6'];
	$answer1 = $_GET['answer7'];
	$answer1 = $_GET['answer8'];
	$answer1 = $_GET['answer9'];
	$answer1 = $_GET['answer10'];
	
	//Create INSERT query
	$qry1 = "INSERT INTO answerkey VALUES(1, '$number1','$answer1')";
	$qry2 = "INSERT INTO answerkey VALUES(2, '$number2','$answer2')";
	$qry3 = "INSERT INTO answerkey VALUES(3, '$number3','$answer3')";
	$qry4 = "INSERT INTO answerkey VALUES(4, '$number4','$answer4')";
	$qry5 = "INSERT INTO answerkey VALUES(5, '$number5','$answer5')";
	$qry6 = "INSERT INTO answerkey VALUES(6, '$number6','$answer6')";
	$qry7 = "INSERT INTO answerkey VALUES(7, '$number7','$answer7')";
	$qry8 = "INSERT INTO answerkey VALUES(8, '$number8','$answer8')";
	$qry9 = "INSERT INTO answerkey VALUES(9, '$number9','$answer9')";
	$qry10 = "INSERT INTO answerkey VALUES(10, '$number10','$answer10')";
	$result = @mysql_query($qry1);
	
	//Check whether the query was successful or not
	if($result) {
		header("location: teacher_home.php");
		exit();
	}else {
		die("Query failed");
>>>>>>> editting on answer_encoder.php
	}
?>