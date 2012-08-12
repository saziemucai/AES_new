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
<form id="answerkeyForm" action="answer_encoder-exec.php" method="post">
<?php
$check_answerkey = mysql_query("select * from prelim where id='$prelim_id'");
$count = 0;
$sr = 1;
if(mysql_num_rows($check_answerkey)==0)
{
    echo "No Answer Keys Found For Prelim";
}
else
{
    while($row_answerkey = mysql_fetch_array($check_answerkey))
    {
        $id = $row_answerkey["prelim_id"];
        $number = $row_question["number"];
        $option1 = $row_question["option1"];
        $option2 = $row_question["option2"];
        $option3 = $row_question["option3"];
        $option4 = $row_question["option4"];
        $answer = $row_question["answer"];

        echo '<div class="answerkey_box">
                <p>'.$sr.'. '.$number.'</p>
                <div style="margin:10px 0 0 10px;">

                   
                    <input type="text" value="'.$number.'" name="number[]" />
                    <input type="hidden" value="'.$answer.'" name="true_answer[]" />
                    <input type="radio" class="answers" name="given_answer['.$count.']" value="A" />&nbsp;'.$option1.'<br/>
                    <input type="radio" class="answers" name="given_answer['.$count.']" value="B" />&nbsp;'.$option2.'<br/>
                    <input type="radio" class="answers" name="given_answer['.$count.']" value="C" />&nbsp;'.$option3.'<br/>
                    <input type="radio" class="answers" name="given_answer['.$count.']" value="D" />&nbsp;'.$option4.'<br/>
                    <input checked="checked" type="radio" class="answers" name="given_answer['.$count.']" value="NONE" style="display:none;" />
                </div>
        </div>';
        $count++;
        $sr++;
    }
}
?>
    <button class="stdbtn btn_black" style="opacity: 1;" type="button" onclick="submit_exam();">Submit</button>
</form>
</body>
</html>
		