<?php
session_start();

$con = mysql_connect("localhost","root","") or die("Could not connect database");
mysql_select_db("aes", $con) or die("Could not select database");

$sy=$_POST['sy'];
$sem=$_POST['sem'];
$subject=$_POST['subject'];
$section1=$_POST['section1'];
$section2=$_POST['section2'];
$section3=$_POST['section3'];
mysql_query("INSERT INTO subjects (sy, sem, subject, section1,section2, section3) VALUES ('$sy', '$sem','$subject', '$section1', '$section2', '$section3')");
	
header("location: classrecord.php");
?>