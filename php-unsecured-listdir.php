<!DOCTYPE HTML>  
<html>
<head>
 <title>Add Button PHP</title>
 <link rel="shortcut icon" href="favicon.ico" />
 <link href="styles.css" rel="stylesheet" />
 
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  


<hr>
<h1> List Dir Reader (Read Anything Anywhere, non recommended, fully unsecured!!) </h1>
<hr>



<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
 File: <textarea name="quval" rows="1" cols="55"><?php print $_POST['quval'];?></textarea>
 <br>
 <br>
 <br>
 <input type="submit" name="btn_submit" value="Read"  />
</form>


<?php    
  if( $_REQUEST['btn_submit'] == "Read" )
  {
     echo '<hr>' ;
     $input = $_POST['quval'];  //get input text
     echo "|IM Sent!| You entered: " .$input . "<br>" ;
     echo '<br><br>' ;
     echo '<br><br>' ;

     echo "Command: " . $_REQUEST['btn_submit'] . ' Content <br><br>' ;

     $mycmd = " ls -ltra  " . $input . " " ; 
     system( $mycmd );
     echo '<hr>' ;
  }
?>

<br/><br/>
</body>
</html>






