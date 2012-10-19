<?php 
 
 //This is the directory where images will be saved 
 $target = "C:xampp/htdocs/zaes_rose/AES_new/profilepics/"; 
 $target = $target . basename( $_FILES['photo']['name']); 
 
 //This gets all the other information from the form 
 $name=$_POST['name'];  
 $photo=($_FILES['photo']['name']); 
 
 // Connects to your Database 
 mysql_connect("localhost", "root", "") or die(mysql_error()) ; 
 mysql_select_db("aes") or die(mysql_error()) ; 
 
 //Writes the information to the database 
 mysql_query("INSERT INTO `students` VALUES ('$name', '$photo')") ; 
 
 //Writes the photo to the server 
 if(move_uploaded_file($_FILES['photo']['tmp_name'], $target)) 
 { 
 
 //Tells you if its all ok 
 echo "The file ". basename( $_FILES['photo']['name']). " has been uploaded, and your information has been added to the directory"; 
 } 
 else { 
 
 //Gives and error if its not 
 echo "Sorry, there was a problem uploading your file."; 
 } 
 ?> 