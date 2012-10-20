<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<link href="style2.css" rel="stylesheet" type="text/css" media="screen" />
<form id="subjectaddForm" name="subjectaddForm" method="post" action="subjects-exec.php" onsubmit="return checkfields()" >

<?php
				  if (isset($_GET['id']))
	{
	
	echo '<form action="subjects-exec.php" method="post" name="">';
	
	
	
			include('config1.php');	
			
			
			
			echo '<table width="200" border="0" cellpadding="0">';
				echo '<tr>';
				echo '<td width="87" valign="top"><div align="left">S.Y.</div></td>';
                echo '<td width="281"><div align="left"><input type="text" name="sy" value="" required="required" style="width:110px;"></div></td>';
				echo '</tr>';
				echo '<tr>';
				echo '<td width="87" valign="top"><div align="left">Semester:</div></td>';
                echo '<td width="281"><div align="left"><input type="text" name="sem" value="" required="required" style="width:110px;"></div></td>';
				echo '</tr>'; 
				echo '<tr>';
                echo '<td width="87" valign="top"><div align="left">Subject:</div></td>';
                echo '<td width="281"><div align="left"><input type="text" name="subject" value="" required="required" style="width:110px;"></div></td>';
				echo '</tr>';
				echo '<tr>';
				echo '<td width="87" valign="top"><div align="left">Section1:</div></td>';
				echo '<td width="281"><div align="left"><input type="text" name="section1" value="" style="width:110px;"></div></td>'; 
				echo '</tr>';
				echo '<tr>';
				echo '<td width="87" valign="top"><div align="left">Section2:</div></td>';
				echo '<td width="281"><div align="left"><input type="text" name="section2" value="" style="width:110px;"></div></td>';
				echo '</tr>';
				echo '<tr>';
				echo '<td width="87" valign="top"><div align="left">Section3:</div></td>';
				echo '<td width="281"><div align="left"><input type="text" name="section3" value="" style="width:110px;"></div></td>';
              echo '</tr>';
              
              
              
               ?>
					
				
				<?php
				echo '</div></td>';
              echo '</tr>';
              echo '<tr>';
                echo '<td valign="top"><div align="left"></div></td>';
                echo '<td><input name="Input" id="button1" type="submit" value="Save" />';
				
              echo '</tr>';
            echo '</table>';
			
  			}
	echo '</form>';
			
			?>
			