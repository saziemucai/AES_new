<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
   <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>Answer Key</title>
	
	<link rel="shortcut icon" type="image/ico" href="images/c.png" />
	
	 <link href="css/login.css" rel="stylesheet" type="text/css" />	
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
                   html += '&nbsp;&nbsp;<input type="text" name="points['+ count +']" id="points['+ count +']" style="width:20px;"> &nbsp;Answer ' + count + ':&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="answer['+ count +']" id="answer['+ count +']" value="A"/>&nbsp;&nbsp;&nbsp;&nbsp;A&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="answer[' + count + ']" id="answer[' + count + ']" value="B"/>&nbsp;&nbsp;&nbsp;&nbsp;B&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio"  name="answer[' + count + ']" id="answer[' + count + ']" value="C"/>&nbsp;&nbsp;&nbsp;&nbsp;C&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio"  name="answer[' + count + ']" id="answer[' + count + ']" value="D"/>&nbsp;&nbsp;&nbsp;&nbsp;D<input checked="checked" type="radio" name="answer['+ count +	']" value="NONE" style="display:none;" />&nbsp;&nbsp;&nbsp<br><br/>';
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
					<li id="current"><a href="answerkey.php"><span><b>Exam Answer Key</b></span></a></li>
					<li><a href="studentanswer.php"><span><b>Student Answer</b></span></a></li>
                     </ul>
		        </div>

				<div class="leftwing">
				<div class="content2">
				<div class="content1">
				<form id="answerForm" name="answerForm" method="post" action="answerkey-exec.php" >

				<div class="opacity1">
				<div class="infoleftwing"><br>
					<font face="Verdana" size="2" color="black"><br>
					
					<center><a rel="facebox" href=view.php?id=' . $row["id"] . '>
					<button style="width:140px; height:30px;"><b><font color="#003366">VIEW ANSWER KEY</font></b></button></a></center><br>
					
						<span>School Year:</span>
						<?php
						include('config1.php');
							$result = mysql_query("SELECT * FROM subjects");
								
								echo '<select id="sy"  name="sy" required="required" style="width:125px;">';
											
									while($row = mysql_fetch_array($result))
									{
										$sy= $row['sy'];
											echo "<option value='$sy'>$sy</option>";
																
									}
								echo '</select>'; ?> </br></br>
								
						<span>Semester:</span><select id="sem" name="sem" required="required" style="width:125px;"> 	
							<option>1st Semester</option>
							<option>2nd Semester</option>
							<option>Summer</option>
							</select><br><br>
		
					<span>Subject: </span><?php
						include('config1.php');
							$result = mysql_query("SELECT * FROM subjects");
								
								echo '<select id="subject"  name="subject" required="required" style="width:125px;">';
											
									while($row = mysql_fetch_array($result))
									{
										$subject= $row['subject'];
											echo "<option value='$subject'>$subject</option>";
																
									}
								echo '</select>'; ?> </br></br>
	
					<span>Answer Key for:</span> <select id="test_name" name="test_name" required="required" style="width:125px;"> 	 
						<option>Prelim</option>
						<option>Midterm</option>
						<option>Finals</option>
						</select><br><br>
					
					# items required: <input type="text" id="num_ans" name="num_ans" required="required" style="width:102px;">     <br><br>
					
				</font>       
	 <center>
	 
        <input type="submit" value="SUBMIT" id="button1" class="button">

		<br><br>
	</div>
 </font>

	<br>
	<font size="2" color="black" face="Verdana">
		  <div id="ansList" class="leftchoice"></div>

	
    </form>
				
				</div></div></div>
				
</body>
</html>
