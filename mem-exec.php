<?php
session_start();

include('config1.php');
$id=$_POST['id'];
$idno=$_POST['idno'];
$courseyr=$_POST['courseyr'];
$subject=$_POST['subject'];
$section=$_POST['section'];

mysql_query("UPDATE students SET idno='$idno', courseyr='$courseyr', subject='$subject', section='$section' WHERE id='$id'");
header("location: member-index.php");
mysql_close($con);
?> 