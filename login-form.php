<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<link href="src-main/facebox.css" media="screen" rel="stylesheet" type="text/css" />
 
  <script src="lib/jquery.js" type="text/javascript"></script>
  <script src="src-main/facebox.js" type="text/javascript"></script>
  <script type="text/javascript">
	function checkpoint() {
		if (document.write.loginForm.username == "") {
			alert("Please enter valid username.") }
		if (document.write.loginForm.password == "") {
			alert("Please enter valid password.") }
		if ((document.write.loginForm.username == "") && (document.write.loginForm.password == "")) {
			alert("All fields required!")
			}
	
	
	}
    jQuery(document).ready(function($) {
      $('a[rel*=facebox]').facebox({
        loadingImage : 'src/loading.gif',
        closeImage   : 'src/closelabel.png'
		
      })
    })
	
  </script>
  
<head>
<title>Login</title>
<link href="regmodule.css" rel="stylesheet" type="text/css" />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
</head>

<link href="templatemo_style.css" rel="stylesheet" type="text/css" />
<link href="src/facebox.css" media="screen" rel="stylesheet" type="text/css" />
<script src="validation.js" type="text/javascript"></script>
<script src="ex1.js" type="text/javascript"></script>
  <script src="lib/jquery.js" type="text/javascript"></script>
  <script src="src/facebox.js" type="text/javascript"></script>
 
<style type="text/css">

a:link {
	text-decoration: none;
}
a:visited {
	text-decoration: none;
}
a:hover font{
	color: #fff;
}
a:hover img {
	color: #fff;
	}
a:active {
	text-decoration: none;
}

</style>

   
<body bgcolor="#550303">
<form id="loginForm" name="loginForm" method="post" action="login-exec.php">
<table id="Table_01" width="1330" border="0" cellpadding="0" cellspacing="0" align="center">
	<tr>
		<td>
			<img id="index_01" src="images/index_01.gif" width="450" height="289" alt="" /></td>
		<td>
			<img id="index_02" src="images/index_02.gif" width="379" height="289" alt="" /></td>
		<td>
			<img id="index_03" src="images/index_03.gif" width="501" height="289" alt="" /></td>
	</tr>
	<tr>
		<td>
			<img id="index_04" src="images/index_04.gif" width="450" height="39" alt="" /></td>
		<td background="images/index_05.gif" width="379" height="39" alt="" />
		&nbsp;&nbsp;&nbsp;&nbsp;<input name="username" type="text" class="textfield" id="username" size="55" /></td>
		<td>
			<img id="index_06" src="images/index_06.gif" width="501" height="39" alt="" /></td>
	</tr>
	<tr>
		<td>
			<img id="index_07" src="images/index_07.gif" width="450" height="27" alt="" /></td>
		<td>
			<img id="index_08" src="images/index_08.gif" width="379" height="27" alt="" /></td>
		<td>
			<img id="index_09" src="images/index_09.gif" width="501" height="27" alt="" /></td>
	</tr>
	<tr>
		<td>
			<img id="index_10" src="images/index_10.gif" width="450" height="36" alt="" /></td>
		<td background="images/index_11.gif" width="379" height="35" alt="" />
		
		&nbsp;&nbsp;&nbsp;&nbsp;<input name="password" type="password" class="textfield" id="password" size="55"/></td>
		<td>
			<img id="index_12" src="images/index_12.gif" width="501" height="36" alt="" /></td>
	</tr>
	<tr>
		<td>
			<img id="index_13" src="images/index_13.gif" width="450" height="52" alt="" /></td>
		<td background="images/index_14.gif" width="379" height="52" alt="" />
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<a href="#" onclick="document.loginForm.submit()"><font face="Century Gothic" color="#6c6b6b" size="3"><b>LOGIN</b></font></a></td></form>
		<td>
			<img id="index_15" src="images/index_15.gif" width="501" height="52" alt="" /></td>
	</tr>
	<tr>
		<td>
			<img id="index_16" src="images/index_16.gif" width="450" height="71" alt="" /></td>
			
				
			
		<td background="images/index_17.gif" width="379" height="71" alt="" /> 
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		
		
		<a rel="facebox" href="register-form.php"><font face="Century Gothic" color="#550303" size="3"><b>Registration</font></a>
		<font color="#550303">|</font> 
		<font face="Century Gothic" color="#550303" size="3">Forgot your password?</b></font>
		</td>
		<td>
			<img id="index_18" src="images/index_18.gif" width="501" height="71" alt="" /></td>
	</tr>
	<tr>
		<td>
			<img id="index_19" src="images/index_19.gif" width="450" height="141" alt="" /></td>
		<td>
			<img id="index_20" src="images/index_20.gif" width="379" height="141" alt="" /></td>
		<td>
			<img id="index_21" src="images/index_21.gif" width="501" height="141" alt="" /></td>
	</tr>
</table>
</form>
</body>
</html>