<?php
	require_once('auth.php');

	// Connect to database

$errmsg = "";
if (! @mysql_connect("localhost", "root", "")) {
        $errmsg = "Cannot connect to database";
        }
@mysql_select_db("aes");

?>
<!DOCTYPE html>
<html lang="en">
<title>AES - My Profile</title>

<link rel="shortcut icon" type="image/ico" href="images/c.png" />

<head>
        
<style type="text/css">f

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

<link href="css/global.css" media="screen" rel="stylesheet" type="text/css" />
<link href="css/style_common.css" media="screen" rel="stylesheet" type="text/css" />
<link href="css/studentprofile.css" media="screen" rel="stylesheet" type="text/css" />
<link href="css/style5.css" media="screen" rel="stylesheet" type="text/css" />
<link href="css/demo.css" media="screen" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="lib/jquery-1.7.2.min.js"></script>

	<link href="bootstrap/css/bootstrap.css" media="screen" rel="stylesheet" type="text/css" />
	<link href="bootstrap/css/bootstrap.min.css" media="screen" rel="stylesheet" type="text/css" />
	<link href="bootstrap/css/bootstrap-responsive.css" media="screen" rel="stylesheet" type="text/css" />
	<link href="bootstrap/css/bootstrap-responsive.min.css" media="screen" rel="stylesheet" type="text/css" />
	
	<link href="bootstrap/js/bootstrap.js" media="screen" rel="stylesheet" type="text/css" />
	<link href="bootstrap/js/bootstrap.min.js" media="screen" rel="stylesheet" type="text/css" />

<body background="images/blue.png">

<br><br>
   <div class="header1">
     <a href="index.php"><i class="icon-white icon-off"></i> <font color="#fff" face="Lucida Console"><b>Logout </b></font> </a>
		
          <div class="clr"></div>
		  
            </div>
			
			<center><img src="images/welcome.png"></center>			
			 <div class="databox">
			<h2><center><font color="#000"><?php echo $_SESSION['SESS_NAME'];?></font></center></h2>
			
			<h3><?php echo $_SESSION['SESS_IDNO'];?>, <?php echo $_SESSION['SESS_COURSE'];?> - <?php echo $_SESSION['SESS_YEAR'];?></h3> 			
			<h3><?php echo $_SESSION['SESS_SUBJECT'];?> - <?php echo $_SESSION['SESS_SECTION'];?>, <?php echo $_SESSION['SESS_SY'];?> - <?php echo $_SESSION['SESS_SEM'];?></h3>
			</div>
			<div class="lol-container">
			<div class="main">
                <!-- FIFTH EXAMPLE -->
                <div class="view view-fifth">
                    <img src="images/prelim1.jpg" />
                    <div class="mask">
                        <h2><?php $idno=$_SESSION['SESS_IDNO']; $subject=$_SESSION['SESS_SUBJECT'];
$prelimexamresults = mysql_query("SELECT * FROM student_answer WHERE test_name='prelim' and idno='$idno' and subject='$subject'") or die(mysql_error());  ?>
			<?php
			  
			  $sql2 = mysql_query("SELECT id FROM prelimexamresults");
			  if (isset($_GET['id'])) {
	$id = $_GET['id'];
	$sql2 = "DELETE FROM prelimexamresults WHERE id = '$id'";
	if (@mysql_query($sql2)) {
		
		} else {
		
			 }
			 }
	
	$sql = mysql_query("SELECT * FROM prelimexamresults ORDER BY id ASC");
	while($row = mysql_fetch_array($prelimexamresults)){ 
					
	echo '<td>'.$row['score'].'/'.$row['num_ans'].'</td>';  
						
	}
			?></strong></h2>
                        
                    </div>
                </div>
                <div class="view view-fifth">
                    <img src="images/midterm.jpg" />
                    <div class="mask">
                        <h2><strong><?php $idno=$_SESSION['SESS_IDNO']; $subject=$_SESSION['SESS_SUBJECT'];
$midtermexamresults = mysql_query("SELECT * FROM student_answer WHERE test_name='midterm' and idno='$idno' and subject='$subject'") or die(mysql_error());  ?>
			<?php
			  
			  $sql2 = mysql_query("SELECT id FROM midtermexamresults");
			  if (isset($_GET['id'])) {
	$id = $_GET['id'];
	if (mysql_query($sql2)) {
		echo '<td>'.$row['score'].'</td>';
		} else {
			if($row['score'] = "")
			echo '<font face="Lucida Console" size="5">No exams checked yet.</font>';
			 }
			 }
	
$sql = mysql_query("SELECT * FROM midtermexamresults ORDER BY id ASC");
while($row = mysql_fetch_array($midtermexamresults)){ 
					
				echo '<tr>';
									echo '<td>'.$row['score'].'/'.$row['num_ans'].'</td>'; 
								
														  }
			?></strong></h2>
                        
                    </div>
                </div>
                <div class="view view-fifth">
                    <img src="images/finals.jpg" />
                    <div class="mask">
                        <h2><strong><?php $idno=$_SESSION['SESS_IDNO']; $subject=$_SESSION['SESS_SUBJECT'];
$finalsexamresults = mysql_query("SELECT * FROM student_answer WHERE test_name='finals' and idno='$idno' and subject='$subject'") or die(mysql_error());  ?>
			<?php
			  
			  $sql2 = mysql_query("SELECT id FROM finalsexamresults");
			  if (isset($_GET['id'])) {
	$id = $_GET['id'];
	$sql2 = "DELETE FROM finalsexamresults WHERE id = '$id'";
	if (@mysql_query($sql2)) {
		echo '<td>'.$row['score'].'</td>';
		} else {
			echo '<font face="Lucida Console" size="5">No exams checked yet.</font>';
			 }
			 }
	
$sql = mysql_query("SELECT * FROM finalsexamresults ORDER BY id ASC");
while($row = mysql_fetch_array($finalsexamresults)){ 
					
				echo '<tr>';
									echo '<td>'.$row['score'].'/'.$row['num_ans'].'</td>'; 
								
														  }
			?></strong></h2>
                        
                    </div></div></div></div></div> 			
</body>
</html>