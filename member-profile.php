<?php
	require_once('auth.php');
	include('config.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>My Profile</title>
<link href="loginmodule.css" rel="stylesheet" type="text/css" />
</head>
<body>
<h1>My Profile </h1>
<a href="member-index.php">Home</a> | <a href="logout.php">Logout</a>
<p>
<div class="content">
<h3><font color = "gray"><?php echo $_SESSION['SESS_NAME'];?></h3></br>  

<?php
$sql = mysql_query("SELECT * FROM members");
while($row = mysql_fetch_array($members)){ 
									echo '.$row['idno'].';
									echo '$row['courseyr']';
									echo '$row['subject']';
									echo '$row['section']'; ?>
</font>
</div>
</p>

</body>
</html>