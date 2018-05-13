<!DOCTYPE HTML>  
<html>
<head>
<title>Tiny Notepad based on PHP</title>

<style>
.error {color: #FF0000;}
</style>
</head>
<body>  

<h2>phpnote</h2>
 
<hr> 
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Comment: <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>
<br>

<?php    
$now = time();
$num = date("w");
if ($num == 0)
{ $sub = 6; }
else { $sub = ($num-1); }
$WeekMon  = mktime(0, 0, 0, date("m", $now)  , date("d", $now)-$sub, date("Y", $now)); 
$todayh = getdate($WeekMon); 
$dd = $todayh[mday];
$mm = $todayh[mon];
$yy = $todayh[year];
$timenow = date("Ymd-His-w"); 

if(isset($_POST['submit'])){ 
$input = $_POST['comment']; //get input text
echo "|IM Sent!| You entered: ".$input . "<br>" ;
echo '<br><br>' ;
$txt = "";
$myfile = fopen("phpnote.txt", "ab+") or die("Unable to open file!");
fwrite($myfile, $timenow );
fwrite($myfile, " ; ");
$txt = $input ;
fwrite($myfile, $txt);
fwrite($myfile, "\n");
fclose($myfile);
}    
?>

<br>
<a href="phpnote.txt">Visit the textfile tutorial</a>
<br>
<br>

</body>
</html>



