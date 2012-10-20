<?php
	session_start();
	?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<link rel="shortcut icon" type="image/ico" href="images/c.png" />

<link href="facebox/facebox.css" media="screen" rel="stylesheet" type="text/css" />

 <script src="lib/jquery.js" type="text/javascript"></script>
 <script src="facebox/facebox.js" type="text/javascript"></script>
 
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
</head>
<body>
<form id="regForm" name="regForm" method="post" action="register-exec.php" >
		<div class="regbox">
            <h1>REGISTRATION</h1> <br>
			
				<div class="rr">
              <span> <b>Name:</b></span>
               <input type="text" required="required" class="input_text"  name="name" id="name"/><br><br>
            
               <span><b>ID No.:</b></span>
               <input type="text" required="required" class="input_text" name="idno" id="idno"/><br><br>

				<span><b>Course: </b></span> 
				<select class="dropdown" name="course" id="course" type="text" required="required">
				<option></option> 				
			   <option name="course" id="course" >BSCS</option> 		 
			   <option name="course" id="course" >BSIT</option>
			   <option name="course" id="course" >BSIS</option>	
			   </select>
			   
				&nbsp;&nbsp;<font color="black" size="2"><b>Year:</font></b></span>
               <select class="dropdown" name="year" id="year" type="text" required="required">	
				<option></option> 			   
			   <option name="year" id="year">1</option>		
			   <option name="year" id="year">2</option>
			   <option name="year" id="year">3</option>
			   <option name="year" id="year">4</option>
			   <option name="year" id="year">5</option>
			    </select><br><br>
				

			   <span> <b>School Year:</b></span>
               <input type="text" class="input_text" name="sy" id="sy" required="required" style="width:65px;"/>
			   &nbsp;&nbsp;<font color="black" size="2"><b>Sem:</font></b></span>
               <select class="dropdown" name="sem" id="sem" type="text" required="required" style="width:85px;">	
				<option></option> 			   
			   <option name="year" id="year">1st Sem</option>		
			   <option name="year" id="year">2nd Sem</option>
			   <option name="year" id="year">Summer</option>
			    </select><br><br>

			  <span><b>Subject:</b></span>
               <input type="text" class="input_text" name="subject" id="subject" required="required" style="width:60px;"/>
			&nbsp;&nbsp;<font color="black" size="2"> <b>Section:</b></span>
               <input type="text"  class="input_text" name="section" id="section" required="required" style="width:55px;"/><br><br>
			   <span> <b>Username:</b></span>
               <input type="text"  class="input_text" name="username" id="username" required="required"/><br><br>
			   <span> <b>Password:</b></span>
               <input type="password"  onchange="form.pwd2.pattern = this.value;"  class="input_text" name="password" id="password" required="required"/><br><br>
			   <span> <b>Confirm Password:</b></span>
               <input type="password" class="input_text" name="cpassword" id="cpassword" required="required"/><br><br>
			   
			   </div>
			
			<input type="submit" id="reg" value="REGISTER"/>
           		         
            
         </div>
</form>

</body>
</html>
