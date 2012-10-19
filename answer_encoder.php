<?php
	//Start session
	session_start();
	require_once('config1.php');
	
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Answer Encoding System</title>
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />

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
background-color:gray;
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
width:180px;
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
margin-left:325px;
border-left:1px solid gray;
padding:1em;
}
</style>

			
<style type="text/css">

		ul {
			font-size: 14px;
			font-family: Arial, Verdana;
			margin-left: 310px;
			padding: 0;
			list-style: none;
		}
		ul li {
			display: block;
			position: relative;
			float: left;
		}
		li ul { display: none; }
		ul li a {
			display: block;
			text-decoration: none;
			color: #006600;
			border-top: 1px solid #342C29;
			padding: 5px 15px 5px 15px;
			background: #342C29	;
			margin-left: 1px;
			white-space: nowrap;
		}
		
		ul li a:hover { background: #342C29; }
		li:hover ul { 
			display: block; 
			position: absolute;
		}
		li:hover li { 
			float: none;
			font-size: 11px;
		}
		li:hover a { background: #CCCC66; }
		li:hover li a:hover { background: #999900; }

	</style>		
</head>

<body>	
<div class="container">

<div class="header"><h1 class="header">Answer Key</h1></div>
<<<<<<< HEAD

    <form name="answerkeyForm" action="answer_encoder-exec.php" method="post" enctype="multipart/form-data">
		
      <strong name="number1">1. </strong><br>
        <input type="radio" name="agree1" value="A"<?php if ($agree1=='A') { echo ' checked'; } ?>>A &nbsp;&nbsp;&nbsp;
		<input type="radio" name="agree1" value="B"<?php if ($agree1=='B') { echo ' checked'; } ?>>B &nbsp;&nbsp;&nbsp;
		<input type="radio" name="agree1" value="C"<?php if ($agree1=='C') { echo ' checked'; } ?>>C &nbsp;&nbsp;&nbsp;
        <input type="radio" name="agree1" value="D"<?php if ($agree1=='D') { echo ' checked'; } ?>>D<br>
		
      <strong name="number2">2. </strong><br>
        <input type="radio" name="agree2" value="A"<?php if ($agree1=='A') { echo ' checked'; } ?>>A &nbsp;&nbsp;&nbsp;
		<input type="radio" name="agree2" value="B"<?php if ($agree2=='B') { echo ' checked'; } ?>>B &nbsp;&nbsp;&nbsp;
		<input type="radio" name="agree2" value="C"<?php if ($agree2=='C') { echo ' checked'; } ?>>C &nbsp;&nbsp;&nbsp;
        <input type="radio" name="agree2" value="D"<?php if ($agree2=='D') { echo ' checked'; } ?>>D<br>
		
	  <strong name="number3">3. </strong><br>
        <input type="radio" name="agree3" value="A"<?php if ($agree3=='A') { echo ' checked'; } ?>>A &nbsp;&nbsp;&nbsp;
		<input type="radio" name="agree3" value="B"<?php if ($agree3=='B') { echo ' checked'; } ?>>B &nbsp;&nbsp;&nbsp;
		<input type="radio" name="agree3" value="C"<?php if ($agree3=='C') { echo ' checked'; } ?>>C &nbsp;&nbsp;&nbsp;
        <input type="radio" name="agree3" value="D"<?php if ($agree3=='D') { echo ' checked'; } ?>>D<br>
		
	  <strong name="number4">4. </strong><br>
        <input type="radio" name="agree4" value="A"<?php if ($agree4=='A') { echo ' checked'; } ?>>A &nbsp;&nbsp;&nbsp;
		<input type="radio" name="agree4" value="B"<?php if ($agree4=='B') { echo ' checked'; } ?>>B &nbsp;&nbsp;&nbsp;
		<input type="radio" name="agree4" value="C"<?php if ($agree4=='C') { echo ' checked'; } ?>>C &nbsp;&nbsp;&nbsp;
        <input type="radio" name="agree4" value="D"<?php if ($agree4=='D') { echo ' checked'; } ?>>D<br>
		
	  <strong name="number5">5. </strong><br>
        <input type="radio" name="agree5" value="A"<?php if ($agree5=='A') { echo ' checked'; } ?>>A &nbsp;&nbsp;&nbsp;
		<input type="radio" name="agree5" value="B"<?php if ($agree5=='B') { echo ' checked'; } ?>>B &nbsp;&nbsp;&nbsp;
		<input type="radio" name="agree5" value="C"<?php if ($agree5=='C') { echo ' checked'; } ?>>C &nbsp;&nbsp;&nbsp;
        <input type="radio" name="agree5" value="D"<?php if ($agree5=='D') { echo ' checked'; } ?>>D<br>
		
		

      <input type="submit" name="submit" value="Submit">

    </form> 

=======
<form name="answerkeyForm" action="answer_encoder-exec.php" method="post" >
<div class="right">
	<div><p name="number" id="number1">1. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
									<input type="radio" name="number1" id="answer" value="A" /> A
			&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="number1" id="answer" value="B" /> B
			&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="number1" id="answer" value="C" /> C
			&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="number1" id="answer" value="D" /> D</p></div>
	
	<div><p name="number" id="number2">2. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
									<input type="radio" name="number2" id="answer" value="A" /> A
			&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="number2" id="answer" value="B" /> B
			&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="number2" id="answer" value="C" /> C
			&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="number2" id="answer" value="D" /> D</p></div>
	
	<div><p name="number" id="number3">3. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
									<input type="radio" name="number3" id="answer" value="A" /> A
			&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="number3" id="answer" value="B" /> B
			&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="number3" id="answer" value="C" /> C
			&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="number3" id="answer" value="D" /> D</p></div>
			
	<div><p name="number" id="number4">4. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
									<input type="radio" name="number4" id="answer" value="A" /> A
			&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="number4" id="answer" value="B" /> B
			&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="number4" id="answer" value="C" /> C
			&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="number4" id="answer" value="D" /> D</p></div>
			
	<div><p name="number" id="number5">5. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
									<input type="radio" name="number5" id="answer" value="A" /> A
			&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="number5" id="answer" value="B" /> B
			&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="number5" id="answer" value="C" /> C
			&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="number5" id="answer" value="D" /> D</p></div>
			
	<div><p name="number" id="number6">6. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
									<input type="radio" name="number6" id="answer" value="A" /> A
			&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="number6" id="answer" value="B" /> B
			&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="number6" id="answer" value="C" /> C
			&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="number6" id="answer" value="D" /> D</p></div>
			
	<div><p name="number" id="number7">7. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
									<input type="radio" name="number7" id="answer" value="A" /> A
			&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="number7" id="answer" value="B" /> B
			&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="number7" id="answer" value="C" /> C
			&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="number7" id="answer" value="D" /> D</p></div>
			
	<div><p name="number" id="number8">8. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
									<input type="radio" name="number8" id="answer" value="A" /> A
			&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="number8" id="answer" value="B" /> B
			&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="number8" id="answer" value="C" /> C
			&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="number8" id="answer" value="D" /> D</p></div>
			
	<div><p name="number" id="number9">9. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
									<input type="radio" name="number9" id="answer" value="A" /> A
			&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="number9" id="answer" value="B" /> B
			&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="number9" id="answer" value="C" /> C
			&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="number9" id="answer" value="D" /> D</p></div>
			
	<div><p name="number" id="number10">10. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
									<input type="radio" name="number10" id="answer" value="A" /> A
			&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="number10" id="answer" value="B" /> B
			&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="number10" id="answer" value="C" /> C
			&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="number10" id="answer" value="D" /> D</p></div>
			
</div>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
<input type="submit" value="Save">
</form>
>>>>>>> 96a6c0fb4083214844064966561eb6932c9df5be
</body>
</html>
		