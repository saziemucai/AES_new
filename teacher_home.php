<?php
	//Start session
	session_start();
	
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Home</title>
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
<link href="facebox/facebox.css" media="screen" rel="stylesheet" type="text/css" />
<script src="lib/jquery.js" type="text/javascript"></script>
 <script src="facebox/facebox.js" type="text/javascript"></script>

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

<script type="text/javascript">
    jQuery(document).ready(function($) {
      $('a[rel*=facebox]').facebox({
        loadingImage : 'facebox/loading.gif',
        closeImage   : 'facebox/closelabel.png'
      })
    })
  </script>
			
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

<div class="header"><h1 class="header">Home</h1></div>

<div class="right">
<h2>Class Record</h2>
<h2><a rel="facebox" href="premidfin.php"> Input Answer Key</a></h2>
<h2>Check Student Answer</h2>
</div>
</body>
</html>
		