<?php
session_start();

include('config1.php');
$userid = $_POST['userid'];
$id=$_POST['id'];
$question=$_POST['question'];
$answer=$_POST['answer'];
$sy=$_POST['sy'];
$sem=$_POST['sem'];
$test_name=$_POST['test_name'];

mysql_query("UPDATE paper SET question='$question', answer='$answer', sy='$sy' , sem='$sem', test_name='$test_name' WHERE id='$userid' ORDER BY id ASC");
header("location: view-exec.php");
mysql_close($con);
?> 