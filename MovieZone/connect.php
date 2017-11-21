<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
   <?php
      $a=$_REQUEST["text1"];
	  $b=$_REQUEST["text2"];
	  $c=$_REQUEST["ch1"];
	  $d=$_REQUEST["text3"];
	  $e=$_REQUEST["text4"];
	  $f=$_REQUEST["text5"];
	  $con=mysql_connect("localhost","root","");
	  mysql_select_db("moviezone");
	  mysql_query("insert into movie(name,password,gender,age,phone,email) values('$a','$b','$c','$d','$e','$f')");
	  echo("registered ");
	 
	  include("login.php");
	  mysql_close($con);
   ?>
</body>
</html>