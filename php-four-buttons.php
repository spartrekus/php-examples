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

 <hr/> 
 <a href="file.txt">Visit the text file</a> 
 <hr/> 


<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
 <input type="submit" name="btn_submit" value="Button1"  />
  &nbsp; &nbsp; &nbsp;
 <input type="submit" name="btn_submit" value="Button2"  />
  &nbsp; &nbsp; &nbsp;
 <input type="submit" name="btn_submit" value="Button3"  />
  &nbsp; &nbsp; &nbsp;
 <input type="submit" name="btn_submit" value="Button4"  />
</form>


<?php    
if( $_REQUEST['btn_submit'] == "Button0" )
{
  echo $_REQUEST['btn_submit'] . ' Button<br><br>' ;
  $myfile = fopen("file.txt", "ab+") or die("Unable to open file!");
  $txt = "Button 0" . ";"  ; fwrite($myfile, $txt); fclose($myfile);
}

else if( $_REQUEST['btn_submit'] == "Button1" )
{
  echo $_REQUEST['btn_submit'] . ' Button<br><br>' ;
  $myfile = fopen("file.txt", "ab+") or die("Unable to open file!");
  $txt = "Button 1" . ";"  ; fwrite($myfile, $txt); fclose($myfile);
}

else if( $_REQUEST['btn_submit'] == "Button2" )
{
  echo $_REQUEST['btn_submit'] . ' Button<br><br>' ;
  $myfile = fopen("file.txt", "ab+") or die("Unable to open file!");
  $txt = "Button 2" . ";"  ; fwrite($myfile, $txt); fclose($myfile);
}

else if( $_REQUEST['btn_submit'] == "Button3" )
{
  echo $_REQUEST['btn_submit'] . ' Button<br><br>' ;
  $myfile = fopen("file.txt", "ab+") or die("Unable to open file!");
  $txt = "Button 3" . ";"  ; fwrite($myfile, $txt); fclose($myfile);
}

else if( $_REQUEST['btn_submit'] == "Button4" )
{
  echo $_REQUEST['btn_submit'] . ' Button<br><br>' ;
  $myfile = fopen("file.txt", "ab+") or die("Unable to open file!");
  $txt = "Button 4" . ";"  ; fwrite($myfile, $txt); fclose($myfile);
}
?>

<br/><br/>
</body>
</html>



