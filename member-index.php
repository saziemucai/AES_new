<?php
	require_once('auth.php');
?>
<!DOCTYPE html>
<html>
<head>
<style type="text/css">
body
{
background-color:#000000;
}
</style>
</head>

<body>
<font color ="gray" size="2">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Member Index</title>
<link href="loginmodule.css" rel="stylesheet" type="text/css" />
</head>

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

<body background="gray.jpg">
<i>welcome <?php echo $_SESSION['SESS_NAME'];?>...</i> <p align="right"> | <a href="add.php"> Settings</a> | <a href="logout.php">Logout</a></p>	
<hr></hr>

<style type="text/css">
div.container
{
width:100%;
margin:0px;
border:0px;
line-height:150%;
}
div.header,div.footer
{
padding:0.5em;
color:white;
background-color:white;
clear:left; 
}
h1.header
{
padding:0;
margin:0;
}
div.left
{
float:left;
width:120px;
margin:0;
padding:1em;
}
div.right
{
margin-right;180px;
border-right:1px solid gray;
padding:1em;
}
div.content
{
margin-left:0px;
border-left:0px;
padding:1em;
}
</style>

<div class="left">
<img src="pic.png" width="100" height="100" />

</div>

<div class="content">
<h3><font color = "gray"><?php echo $_SESSION['SESS_NAME'];?></font></h3>
<font color = "gray" size="3"><?php echo $_SESSION['SESS_COURSEYR'];?> </br>
<?php echo $_SESSION['SESS_SUBJECT'];?> - <?php echo $_SESSION['SESS_SECTION'];?> </br>
</font>
</div>
<br>

<style type="text/css">
#students
{
font-family:"Trebuchet MS", Arial, Helvetica, sans-serif;
width:85%;
border-collapse:collapse;
}
#students td, #students th
{
font-size:1em;
border:1px solid #98bf21;
padding:3px 7px 2px 7px;
}
#students th
{
font-size:1.1em;
text-align:center;
padding-top:3px;
padding-bottom:4px;
background-color:#6495ed;
color:#ffffff;
}
#students tr.alt td
{
color:#000000;
background-color:#9999cc;
}
</style>
</head>
<center>
<body>
<table id="students">
<tr>
<th>PRELIM</th>	
<th>MIDTERM</th>
<th>FINALS</th>
</tr>
</font>
</center>
</body>
</html>