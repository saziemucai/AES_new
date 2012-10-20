<?php
session_start();

$con = mysql_connect("localhost","root","") or die("Could not connect database");
mysql_select_db("aes", $con) or die("Could not select database");

$sy=$_POST['sy'];
$sem=$_POST['sem'];
$subject = $_POST["subject"];
$count = $_POST["count"]; 
$num_ans = $_POST["num_ans"]; 
$test_name = $_POST["test_name"];


for($count=1; $count<=$num_ans; $count++)
{
    $answer=$_POST['answer'][($count+1)-1];
	$points=$_POST['points'][($count+1)-1];
   mysql_query("INSERT INTO paper (id, idd, sy, sem, subject, test_name, question, num_ans, option1, option2, option3, option4, answer, points) VALUES ('$id','$count', '$sy', '$sem', '$subject', '$test_name', 'Number $count', '$num_ans', 'A', 'B', 'C', 'D','$answer', '$points')"); 
   
   }
   
   
header("location: answerkey.php");
?>
 
