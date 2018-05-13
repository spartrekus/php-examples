<!DOCTYPE HTML>  
<html>
<head>
 <title>System WGET (GNU)</title>

<link rel="shortcut icon" href="favicon.ico" />
<link href="styles.css" rel="stylesheet" />
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  

<hr>
<h4>HTML Fetcher (handy but unsecured method, non recommended.)</h4>
<hr>

<br>
<br>
<br>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Comment: <textarea name="quval" rows="1" cols="55"><?php print $_POST['quval'];?></textarea>
  <br>
  <br> &nbsp; &nbsp; &nbsp; &nbsp;
  <input type="submit" name="submit" value="submit" >  
  <br> 
  <br>
 <br>
</form>



<?php
   if(isset($_POST['submit']))
   { 
          $input = $_POST['quval']; //get input text
          echo "|IM Sent!| You entered: " .$input . "<br>" ;
          echo '<br><br>' ;
          system(  " wget " . "\""   . $input . "\" -O page.html " );
          echo '<br><br>' ;
   }
?>

<h4>HTML Links</h4>
<p><a href="page.html">Visit our Webpage</a></p>

<br/><br/>
</body>
</html>

