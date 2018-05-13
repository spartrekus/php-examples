<!DOCTYPE HTML>
<html>  
<body>

<br>
<hr>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
Name: <input type="text" name="name"><br>
<br>
E-mail: <input type="text" name="email"><br>
<br>
<input type="submit" name="btn_submit" value="Send"  />
</form>
<br>
<hr>


<?php    
  if( $_REQUEST['btn_submit'] == "Send" )
  {
     echo "<br>";
     echo "<br>";
     echo "Well Done!<br>";
     echo "Welcome " . $_POST["name"] .  "<br>" ;
     echo "Your email address is " . $_POST["email"] .  "<br>" ;
   }
?>

</body>
</html>