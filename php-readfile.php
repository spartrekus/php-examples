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
<h1> File Reader (Read Anything Anywhere, non recommended) </h1>
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
     $input = $_POST['quval'];  //get input text
     echo "|IM Sent!| You entered: " .$input . "<br>" ;
     echo '<br><br>' ;
     echo '<br><br>' ;

     echo $_REQUEST['btn_submit'] . ' File<br><br>' ;

     $myfile = $input; 
     $file = fopen( $myfile , "r");
     while(! feof($file))
     {
        $line = fgets($file);
        echo $line . "<br>"; 
     }
     fclose($file);
  }
?>

<br/><br/>
</body>
</html>






