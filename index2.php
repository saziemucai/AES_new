<?php
	header('Location: log.php');
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">



<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<meta name="keywords" content="" />

<meta name="description" content="" />

<meta http-equiv="content-type" content="text/html; charset=utf-8" />

<title>Answer Encoding System</title>

<link href="style.css" rel="stylesheet" type="text/css" media="screen" />

</head>

<script type="text/javascript">
// Validation scripts
function check(){
	if((document.loginForm.username.value=="") | (document.loginForm.password.value=="")){
		alert("All fields are required!");
		return false;
		}
	else
		return true;
}

</script>

<form id="loginForm" name="loginForm" method="post" action="login-exec.php" onsubmit="return check()" >

<body>

<div id="wrapper">

	<div id="header-wrapper">

		<div id="header">

			<div id="logo">

				<h1><a href="loginform.php">DigiSign</a></h1>

			</div><br><br>

			<div id="menu">

			Username: <input name="username" type="text" size="25" class="textfield" id="username">

			Password: <input name="password" type="password" size="25" class="textfield" id="password">
			
			<input type="submit" name="submit" value="Log In">

			</div></form>

	
<td align="left">
<iframe name="display" src="sign.php" width="45%" height=450 scrolling="no">
</iframe>

<align="right"><iframe name="display" src="adver.php" width="53%" height=450 scrolling="no"></iframe>
</td>

		

				<!-- end #sidebar -->

				<div style="clear: both;">&nbsp;</div>

			</div>

		</div>

	</div>

	<!-- end #page -->

	<div id="footer">

		

	</div>

</div>

<!-- end #footer -->

</form>

</body>

</html>

