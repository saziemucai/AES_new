<!--para sa add data sa textbox -->
	<SCRIPT language="javascript">
<!--

function addCombo() {
	var textb = document.getElementById("txtCombo");
	var combo = document.getElementById("combo");
	combo.value=combo.value +textb.value + ", ";
	textb.value = "";
}
//-->
</SCRIPT>
	<!--end--> 



<?php
				  if (isset($_GET['id']))
	{
	
	echo '<form action="editcc-exec.php" method="post" name="abc">';
	
	//echo "<img width=200 height=180 alt='Unable to View' src='" . $row1["image"] . "'>";
	
			include('config1.php');	
		
			$id=$_GET['id'];
			
			$result = mysql_query("SELECT * FROM paper WHERE id = '$id'");

			while($row = mysql_fetch_array($result))
  			{
			
			
		echo '<input type="hidden" name="userid" value="'. $row['id'] .'">'; 	
			
			
			
			echo '<table width="360" border="0" cellpadding="0">';
              echo '<tr>';
                echo '<td width="87" valign="top"><div align="right">Question:</div></td>';
                echo '<td width="281"><div align="left"><input type="text" name="question" value="'. $row['question'] .'"></div></td>';
              echo '</tr>';
              echo '<tr>';
                echo '<td valign="top"><div align="right">Answer:</div></td>';
                echo '<td><div align="left"><input type="text" name="answer" value="'. $row['answer'] .'"></div></td>';
              echo '</tr>';
              echo '<tr>';
                echo '<td valign="top"><div align="right">SY:</div></td>';
                echo '<td><div align="left"><input type="text" name="sy" value="'. $row['sy'] .'"></div></td>';
              echo '</tr>';
              echo '<tr>';
                echo '<td valign="top"><div align="right">Sem:</div></td>';
                echo '<td><div align="left"><input type="text" name="sem" value="'. $row['sem'] .'"></div></td>';
              echo '</tr>';
              echo '<tr>';
                 echo '<tr>';
			  echo '<td valign="top"><div align="right">Test Name:</div></td>';
                echo '<td><div align="left"><input type="text" name="test_name" value="'. $row['test_name'] .'"></div></td>';
               
				?>
			
				
				<?php
				echo '</div></td>';
              echo '</tr>';
              echo '<tr>';
                echo '<td valign="top"><div align="right"></div></td>';
                echo '<td> <input type="submit" value="save" id="button1" class="button"></td>';
              echo '</tr>';
            echo '</table>';
			
  			}
	echo '</form>';
			}
			?>
			
			
