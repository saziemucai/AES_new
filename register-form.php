<?php
	session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<link href="src/facebox.css" media="screen" rel="stylesheet" type="text/css" />
 
  <script src="lib/jquery.js" type="text/javascript"></script>
  <script src="src/facebox.js" type="text/javascript"></script>
  
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Login Form</title>
<link href="loginmodule.css" rel="stylesheet" type="text/css" />
</head>
<body>

<form id="regForm" name="regForm" method="post" action="register-exec.php">
  <table width="300" border="0" align="center" cellpadding="2" cellspacing="0">
    <tr>
      <th>Name</th>
      <td><input name="name" type="text" class="textfield" id="name" /></td>
    </tr>
    <tr>
      <th>ID No.</th>
      <td><input name="idno" type="text" class="textfield" id="idno" /></td>
    </tr>
	<tr>
      <th>Course/Yr.</th>
      <td><input name="courseyr" type="text" class="textfield" id="courseyr" /></td>
    </tr>
	<tr>
      <th>Subject</th>
      <td><input name="subject" type="text" class="textfield" id="subject" /></td>
    </tr>
	<tr>
      <th>Section</th>
      <td><input name="section" type="text" class="textfield" id="section" /></td>
    </tr>
    <tr>
      <th width="124">Username</th>
      <td width="168"><input name="username" type="text" class="textfield" id="username" /></td>
    </tr>
    <tr>
      <th>Password</th>
      <td><input name="password" type="password" class="textfield" id="password" /></td>
    </tr>
    <tr>
      <th>Confirm Password </th>
      <td><input name="cpassword" type="password" class="textfield" id="cpassword" /></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="Submit" value="Register" /></td>
    </tr>
  </table>
</form>
</body>
</html>
