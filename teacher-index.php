<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<title> AES - Login </title>

<link rel="shortcut icon" type="image/ico" href="images/c.png" />

<link href="css/login.css" rel="stylesheet" type="text/css" media="screen" />
<link href="facebox/facebox.css" media="screen" rel="stylesheet" type="text/css" />

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

<body background="images/blue.png"><br><br>
<center><br><br><br><br><img src="images/aes.png"></center><br>

<form id="loginForm" name="loginForm" method="post" action="teacherlogin-exec.php">
          <div class="box">
            &nbsp;&nbsp;<font size="5"><b>TEACHER'S LOGIN</b></font>
            <div class="bb">
               <span>Username:</span>
               <input type="text" required="required" class="input_text" name="username" id="username"/><br><br>
           
			 <span>Password:</span>
               <input type="password" required="required" class="input_text" name="password" id="password"/><br><br>
			     <input type="submit" id="button" class="button" value="LOGIN" style="font: bold 14px Arial" />				 
			</div>
			            
			
             		         
           </div>
</form>
</body>
</html>
