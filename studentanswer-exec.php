<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
   <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>Student Answer</title>
	
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
    <script type="text/javascript">
        //when the webpage has loaded do this
        $(document).ready(function() {  
            //if the value within the dropdown box has changed then run this code            
            $('#num_ans').change(function(){
                //get the number of fields required from the dropdown box
                var num = $('#num_ans').val(); 
				
                var count = 0; //integer variable for 'for' loop
                var html = ''; //string variable for html code for fields 
                //loop through to add the number of fields specified
                for (count=1;count<=num;count++) {
                    //concatinate number of fields to a variable
                    html += '&nbsp;&nbsp;<input type="text" name="points['+ count +']" id="points['+ count +']" style="width:20px;"> &nbsp;Answer ' + count + ':<input type="radio" name="answer['+ count +']" id="answer['+ count +']" value="A"/>A&nbsp;&nbsp;&nbsp;<input type="radio" name="answer[' + count + ']" id="answer[' + count + ']" value="B"/>B&nbsp;&nbsp;&nbsp;<input type="radio"  name="answer[' + count + ']" id="answer[' + count + ']" value="C"/>C&nbsp;&nbsp;&nbsp;<input type="radio"  name="answer[' + count + ']" id="answer[' + count + ']" value="D"/>D<input checked="checked" type="radio" name="answer['+ count +	']" value="NONE" style="display:none;" />&nbsp;&nbsp;&nbsp<br><br/>';
                }

                //insert this html code into the div with id ansList
                $('#ansList').html(html);
            });
        }); 
    </script>
	
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
		<font size="2" color="#fff" face="Verdana">
		<div id="ansList" class="leftchoice"></div></font>
    </form>
</div>

				</div></div></div>
				
</body>
</html>



<?php
$con = mysql_connect("localhost","root","") or die("Could not connect database");
mysql_select_db("aes", $con) or die("Could not select database");

$score = 0;
$total = 0;
$qryC = "SELECT * FROM temp";
$resultC = mysql_query($qryC);
$rowC = mysql_fetch_array($resultC);
$idno = $rowC['idno'];
$sy = $rowC['sy'];
$sem =  $rowC['sem'];
$subject =  $rowC['subject'];
$test_name = $rowC['test_name'];
$num = $rowC['num'];


		
				
				for ($i=1; $i<=$num; $i++) {			
				$answer = $_POST['answer'][$i-1];	
				$result = mysql_query("SELECT * FROM paper WHERE sy='$sy' and sem='$sem' and test_name='$test_name' and idd='$i' and subject='$subject'");
				while ($qry = mysql_fetch_array($result)) {
				$ans = $qry['answer'];
				if ($answer == $ans) {
				$resultA = mysql_query("SELECT points FROM paper WHERE sy='$sy' and sem='$sem' and test_name='$test_name' and idd='$i' and answer='$answer' and subject='$subject'");
				while($qryA = mysql_fetch_array($resultA)) {
				$score += $qryA['points'];
				}
				}
				else {
				
				}
			
				}

				}
	$resultB = mysql_query("SELECT SUM(points) from paper WHERE test_name='$test_name' and subject='$subject' and sy='$sy' and sem='$sem'");
	$qryB = mysql_fetch_array($resultB);
	$total = $qryB['SUM(points)'];
	
				
	
	mysql_query("INSERT INTO student_answer (idno, sy, sem, subject, test_name, score, num_ans) VALUES ('$idno', '$sy', '$sem', '$subject', '$test_name', '$score', '$total')");
	mysql_query("TRUNCATE temp");
?>	

<body>
<script type="text/javascript">
window.alert("Score is: <?php echo $score; ?> out of <?php echo $total; ?>")
</script>
</body>
</html>

