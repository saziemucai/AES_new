<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
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
<font size="5"><b>CSc 101 - Computer Programming I (Using C)</b></font>
<hr>
<p align="right"><a href="logout.php">Logout</p></a>
</hr>
<style type="text/css">

.sidebarmenu ul{
margin: 0;
padding: 0;
list-style-type: none;
font: bold 13px Verdana;
width: 180px; /* Main Menu Item widths */
border-bottom: 1px solid #ccc;
}
 
.sidebarmenu ul li{
position: relative;
}

/* Top level menu links style */
.sidebarmenu ul li a{
display: block;
overflow: auto; /*force hasLayout in IE7 */
color: white;
text-decoration: none;
padding: 15px;
border-bottom: 1px solid #778;
border-right: 1px solid #778;
}

.sidebarmenu ul li a:link, .sidebarmenu ul li a:visited, .sidebarmenu ul li a:active{
background-color: #012D58; /*background of tabs (default state)*/
}

.sidebarmenu ul li a:visited{
color: white;
}

.sidebarmenu ul li a:hover{
background-color: black;
}

/*Sub level menu items */
.sidebarmenu ul li ul{
position: absolute;
width: 170px; /*Sub Menu Items width */
top: 0;
visibility: hidden;
}

.sidebarmenu a.subfolderstyle{
background: url(right.gif) no-repeat 97% 50%;
}

 
/* Holly Hack for IE \*/
* html .sidebarmenu ul li { float: left; height: 1%; }
* html .sidebarmenu ul li a { height: 1%; }
/* End */

</style>

<script type="text/javascript">

//Nested Side Bar Menu (Mar 20th, 09)
//By Dynamic Drive: http://www.dynamicdrive.com/style/

var menuids=["sidebarmenu1"] //Enter id(s) of each Side Bar Menu's main UL, separated by commas

function initsidebarmenu(){
for (var i=0; i<menuids.length; i++){
  var ultags=document.getElementById(menuids[i]).getElementsByTagName("ul")
    for (var t=0; t<ultags.length; t++){
    ultags[t].parentNode.getElementsByTagName("a")[0].className+=" subfolderstyle"
  if (ultags[t].parentNode.parentNode.id==menuids[i]) //if this is a first level submenu
   ultags[t].style.left=ultags[t].parentNode.offsetWidth+"px" //dynamically position first level submenus to be width of main menu item
  else //else if this is a sub level submenu (ul)
    ultags[t].style.left=ultags[t-1].getElementsByTagName("a")[0].offsetWidth+"px" //position menu to the right of menu item that activated it
    ultags[t].parentNode.onmouseover=function(){
    this.getElementsByTagName("ul")[0].style.display="block"
    }
    ultags[t].parentNode.onmouseout=function(){
    this.getElementsByTagName("ul")[0].style.display="none"
    }
    }
  for (var t=ultags.length-1; t>-1; t--){ //loop through all sub menus again, and use "display:none" to hide menus (to prevent possible page scrollbars
  ultags[t].style.visibility="visible"
  ultags[t].style.display="none"
  }
  }
}

if (window.addEventListener)
window.addEventListener("load", initsidebarmenu, false)
else if (window.attachEvent)
window.attachEvent("onload", initsidebarmenu)

</script>

<div class="sidebarmenu">
<ul id="sidebarmenu1">
<li><a href="#">EXAM ANSWER KEY</a>
  <ul>
  <li><a href="prelim.php">PRELIM</a></li>
  <li><a href="midterm.php">MIDTERM</a></li>
  <li><a href="finals.php">FINALS</a></li>
  </ul>
</li>
<li><a href="#">STUDENT ANSWER KEY</a>
  <ul>
  <li><a href="a-section.php">A1</a></li>
  <li><a href="#">B</a></li>
  <li><a href="#">C</a></li>
  <li><a href="#">D</a></li>
  </ul>
</li>
<li><a href="#">CLASS RECORD</a>
  <ul>
  <li><a href="a1-section.php">A1</a></li>
  <li><a href="a5-section.php">CSC101-A5</a></li>
  <li><a href="#">C2S</a></li>
  <li><a href="#">C4S</a></li>
  </ul>
</li>
</ul>
</div>

</body>
</html>
