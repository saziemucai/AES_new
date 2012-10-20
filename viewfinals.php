<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<link href="facebox/facebox.css" media="screen" rel="stylesheet" type="text/css" />

<form id="show" name="show" method="post" action="exe3.php" >
<form id= "showw" name="showw" method="post" action="student-answer.php">

<div class="view">
	
		<span>Student ID No:</span> <input type="text" id="idno" name="idno" class="input_text1" required="required" style="width:110px;"> <br><br>
		<span>School Year:</span> <?php
			   include('config1.php');
		$result = mysql_query("SELECT * FROM subjects");
								
				echo '<select id="sy"  name="sy" class="dropdown1" required="required" style="width:125px">';	
echo "";							
							while($row = mysql_fetch_array($result))
								  {
									$sy= $row['sy'];
									
									echo "<option value='$sy'>$sy</option>";
																
}
echo '</select>'; ?> <br><br>  
		
	<span>Semester:</span><select id="sem" name="sem" required="required" style="width:125px"> 
			
		<option>1st Semester</option>
		<option>2nd Semester</option>`
		<option>Summer</option>
		</select><br><br>
		
		<span>Subject:</span> <?php
			   include('config1.php');
		$result = mysql_query("SELECT * FROM subjects");
								
				echo '<select id="subject"  name="subject" class="dropdown1" required="required" style="width:125px">';	
echo "";							
							while($row = mysql_fetch_array($result))
								  {
									$subject= $row['subject'];
									echo "<option value='$subject'>$subject</option>";
																
}
echo '</select>'; ?> <br><br>

		

<p align="right">
 <input type="submit" value="view" id="button1"></p>
</html>