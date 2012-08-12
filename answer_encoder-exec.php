<?php
	//Start session
	session_start();
	
	//Include database connection details
	require_once('config1.php');

	$count = $_POST["count"];    // hidden value under the while loop

	for($i=1; $i<=$count; $i++)
	{
   	
   
   	$number = $_POST["number"][$i-1];
   	$answer = $_POST["answer"][$i-1];

   	mysql_query("insert into prelim(number, answer) values('$number, $answer')");

   	 echo mysql_error();

	}
?>