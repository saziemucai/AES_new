<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
   <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>Midterm</title>
	
	<link rel="shortcut icon" type="image/ico" href="images/c.png" />
		
    <link href="tabs.css" rel="stylesheet" type="text/css" />
	<link href="css/styles.css" media="screen" rel="stylesheet" type="text/css" />
	<link href="css/style5.css" media="screen" rel="stylesheet" type="text/css" />
	<link href="css/demo.css" media="screen" rel="stylesheet" type="text/css" />
	<link href="css/studentprofile.css" media="screen" rel="stylesheet" type="text/css" />
	<link href="facebox/facebox.css" media="screen" rel="stylesheet" type="text/css" />
	
	<link href="bootstrap/css/bootstrap.css" media="screen" rel="stylesheet" type="text/css" />
	<link href="bootstrap/css/bootstrap.min.css" media="screen" rel="stylesheet" type="text/css" />
	<link href="bootstrap/css/bootstrap-responsive.css" media="screen" rel="stylesheet" type="text/css" />
	<link href="bootstrap/css/bootstrap-responsive.min.css" media="screen" rel="stylesheet" type="text/css" />
	
	<link href="bootstrap/js/bootstrap.js" media="screen" rel="stylesheet" type="text/css" />
	<link href="bootstrap/js/bootstrap.min.js" media="screen" rel="stylesheet" type="text/css" />
	
</head>

<script src="lib/jquery.js" type="text/javascript"></script>
<script src="facebox/facebox.js" type="text/javascript"></script>
 
	
  <script type="text/javascript">
    jQuery(document).ready(function($) {
      $('a[rel*=facebox]').facebox({
        loadingImage : 'facebox/loading.gif',
        closeImage   : 'facebox/closelabel.png'
      })
    })
  </script>
  

<style type="text/css">

a:link {
	text-decoration: none;
}
a:visited {
	text-decoration: none;
}
a:hover font{
	color: #3333FF;
}
a:hover img {
	color: #3333FF;
	}
a:active {
	text-decoration: none;
}

</style>

 <script type="text/javascript" src="lib/jquery-1.7.2.min.js" ></script>
   	
<body background="images/blue.png">
<?php include('config1.php'); ?>
<br><br>
   <div class="header">
     <a href="teacher-index.php"><i class="icon-white icon-off"></i> <strong><font color="#fff" face="Lucida Console">Logout &nbsp;&nbsp;</font></strong></a>
		
          <div class="clr"></div>
		  </div>	
			
		  <br><br>
		  
                <div id="tabs1" class="leftwing">
                     <ul>                  
					<!-- CSS Tabs -->
					<li><a href="classrecord.php"><span><b>Class Record</b></span></a></li>
					<li><a href="answerkey.php"><span><b>Exam Answer Key</b></span></a></li>
					<li id="current"><a href="studentanswer.php"><span><b>Student Answer</b></span></a></li>
                     </ul>
		        </div>

				<div class="leftwing">
				<div class="content2">
				<div class="content1">
			
				<div class="leftstyle">
				<div class="opacity1">
<form id="indexForm" name="indexForm" method="post" action="studentanswer-exec.php" >
<br>

<font size="2" color="black" face="Verdana">
<center>


		Answer Key for: <br><br>
	<a rel="facebox" href=viewprelim.php?id=' . $row["id"] . '><button style="width:140px; height:30px;"><b><font color="#003366">PRELIM</font></b></button></a><br><br>
		
	<a rel="facebox" href=viewmidterm.php?id=' . $row["id"] . '><button style="width:140px; height:30px;"><b><font color="#003366">MIDTERM</font></b></button></a><br><br>
	
	<a rel="facebox" href=viewfinals.php?id=' . $row["id"] . '><button style="width:140px; height:30px;"><b><font color="#003366">FINALS</font></b></button></a><br><br>

		
        <input type="submit" value="SUBMIT" id="button1">
		<br><br>
		</div>
		<font size="2" color="#000" face="Verdana">
		<div class="leftchoice2"><br>
  
<?php
$con = mysql_connect("localhost","root","") or die("Could not connect database");
mysql_select_db("aes", $con) or die("Could not select database");

echo("<form action='studentanswer-exec.php' method='post'>");
	
$idno = $_POST['idno'];
$sem = $_POST['sem'];
$sy = $_POST['sy'];
$subject = $_POST['subject'];
$test_name = 'Midterm';

$sqlA = "SELECT * FROM students WHERE idno = '$idno'";
$qryA = mysql_query($sqlA);
$row = mysql_fetch_array($qryA);
$student_name = $row['name'];
$section = $row['section'];

$sql = "SELECT * FROM paper  WHERE test_name='Midterm' and sem='$sem' and sy='$sy' and subject='$subject' ORDER BY id ASC";
	$result= mysql_query($sql);
    $num= mysql_numrows($result);

echo "Student:", "<b>".$student_name."</b>" ; echo "&nbsp&nbsp&nbsp";
echo "Subject: <b>", $subject."</b>"; echo "&nbsp&nbsp&nbsp";
echo "Test Name: <b> Midterm"."</b>"; echo "</br></br>";
	
	$i=0;
	while($i < $num){
        $field = array($i => mysql_result($result,$i,"question"));
        $j = $i + 1;
        echo "&nbsp; &nbsp; $field[$i]: &nbsp;&nbsp;&nbsp;&nbsp;";
        echo ("
      <input type='radio' name='answer[$i]' value='A' id='answer'>
      &nbsp;&nbsp;&nbsp;&nbsp;A&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	  <input type='radio' name='answer[$i]' value='B' id='answer'>
      &nbsp;&nbsp;&nbsp;&nbsp;B&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	  <input type='radio' name='answer[$i]' value='C' id='answer'>
      &nbsp;&nbsp;&nbsp;&nbsp;C&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type='radio' name='answer[$i]' value='D' id='answer'>
     &nbsp;&nbsp;&nbsp;&nbsp;D<br><br>");
    $i++;   
    }

 
    echo("</form>");
    echo("<br>");
	mysql_query("INSERT INTO temp (idno, sy, sem, subject, test_name, student_name, num) VALUES ('$idno', '$sy', '$sem', '$subject', '$test_name', '$student_name', '$num')");
	
	
	?>
		</div>
		</font>
    </form>
</div>

</body>
</html>
