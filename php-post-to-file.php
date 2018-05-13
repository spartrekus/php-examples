<!DOCTYPE HTML>  
<html>
<head>
<title> PHP Examples (GNU)</title>

<link rel="shortcut icon" href="favicon.ico" />
<link href="styles.css" rel="stylesheet" />
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  

<hr>
<h4>HTML BUTTON POST TO FILE</h4>
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
          $input = $_POST['quval'];  //get input text
          echo "|IM Sent!| You entered: " .$input . "<br>" ;
          echo '<br><br>' ;
          echo '<br><br>' ;
          $fp = fopen( "file.txt", "ab+" );
          fwrite( $fp , "Content:"  );
          fwrite( $fp , $input );
          fwrite( $fp , "\n" );
          fclose( $fp );
   }
?>

<h2>HTML Links</h2>
<p><a href="file.txt">Visit the textfile file.txt</a></p>


<br/><br/>
</body>
</html>

