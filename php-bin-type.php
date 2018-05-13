<!DOCTYPE html>
<html>
<body>

<h2>HTML/PHP Bin Type file</h2>
<p><a href="https://www.freebsd.org/">Visit our HTML FreeBSD Webpage</a></p>
<p><a href="..">Back Parent (dir)</a></p>
<br>


<?php
if ( $handle = opendir( "." ))
{
     echo "PHP Simple TYPE:<br>";

     $myfile = "text.txt"
     $file = fopen( $myfile , "r");
     while(! feof($file))
     {
        $line = fgets($file);
        echo $line . "<br>"; 
     }
     fclose($file);
}
?>

</body>
</html>

