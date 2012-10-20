<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
   <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>Class Record</title>
	
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
  <style type="text/css" title="currentStyle">
		
			@import "css/demo_table_jui.css";
			@import "js/smoothness/jquery-ui-1.8.4.custom.css";
		</style>
		
				<script type="text/javascript" language="javascript" src="js/jquery.dataTables.js"></script>
		<script type="text/javascript" charset="utf-8">
			$(document).ready(function() {
				oTable = $('#example').dataTable({
					"bJQueryUI": true,
					"sPaginationType": "full_numbers"
				});
			} );
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
<body background="images/blue.png">
<?php include('config1.php'); ?>
<br><br>
   <div class="header">
     <a href="teacher-index.php"><i class="icon-white icon-off"></i> <strong><font color="#FFF" face="Lucida Console">Logout &nbsp;&nbsp;</font></strong></a>
		
          <div class="clr"></div>
		  </div>	
			
		  <br><br>
		  
                <div id="tabs1" class="leftwing">
                     <ul>                  
					<!-- CSS Tabs -->
					<li><a href="classrecord.php"><span><b>Class Record</b></span></a></li>
					<li id="current"><a href="answerkey.php"><span><b>Exam Answer Key</b></span></a></li>
					<li><a href="studentanswer.php"><span><b>Student Answer</b></span></a></li>
                     </ul>
		        </div>

				<div class="leftwing">
				<div class="content2	">
				<center>
				<div class="content1">
				<br>
				<div id="dt_example">
				<div id="container">
				<div class="demo_jui">
				
				<table cellpadding="0" cellspacing="0" border="0" class="display" id="example">

	<thead>
		<tr>
			<th><font color="black"  size="2">Question</th>
			<th><font color="black"  size="2">Answer</th>
			<th><font color="black"  size="2">S.Y.</th>
			<th><font color="black"  size="2">Semester</th>
			<th><font color="black"  size="2">Major Exams</th>
			<th><font color="black"  size="2">Action</th>
			
		</tr>
	</thead>
	<tbody>
		
			<?php
			  include ('config1.php');
			  
	$uid = $_GET['id'];
	$question=$_POST['question'];
	$answer=$_POST['answer'];
	$sy=$_POST['sy'];
	$sem=$_POST['sem'];
	$test_name=$_POST['test_name'];
	$qry = ("SELECT * from paper where id like '$uid%' and sy like '$sy%' and sem like '$sem%' and test_name like '$test_name%' ORDER BY id, question, sy, sem, test_name ASC");
	$result = mysql_query($qry);	
	
	
		while($row = mysql_fetch_array($result)){ 
					
				echo '<tr>';
									echo '<td>'.$row['question'].'</td>';
									echo '<td>'.$row['answer'].'</td>';
									echo '<td>'.$row['sy'].'</td>';
									echo '<td>'.$row['sem'].'</td>';
									echo '<td>'.$row['test_name'].'</td>';
						echo '<td>';
									
									echo'<a rel="facebox" href=editcc.php?id=' .$row['id'] . '>' . '<font color="black">Edit</font>' . '</a>';
																
								  } 
								  
				echo '</td></tr> ';
			?>
	</tbody>
	</div></div></div></div></div></div>