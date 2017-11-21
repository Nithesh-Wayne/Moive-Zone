<?php include ("head.php")
?>
<script type="text/javascript">
   function msg()
   {
	   alert("you are registered");
   }
</script>
<link rel="stylesheet" href="style.css" type="text/css">
<center>

<body>

<div class="register">
   <form action="connect.php" method="post">
      UserName:<br><input type="text" size="30" name="text1" required="required" /><br /><br>
      Password :<br><input type="password" size="30" name="text2" required="required" /><br /><br>
      Gender:<br><select name="ch1">
         <option value="male">male</option>
         <option value="female">female</option>
      </select><br><br>
      Age:<br><input type="number" size="3" name="text3" required="required" /><br/><br>
	  Phone No.:<br><input type="number" size="15" name="text4" required="required"/><br/><br>
      Email:<br><input type="text" name="text5"><br><br>
      <br><input type="submit" value="Login"  onclick="msg();"/>
        </form>
   </div> 
</center>
   
</body>
<?php include ("foot.php")
?>