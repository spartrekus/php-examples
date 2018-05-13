<!DOCTYPE html>
<html>
<body>

<h2>HTML/PHP Bin list file/dir</h2>
<p><a href="https://www.freebsd.org/">Visit our HTML FreeBSD Webpage</a></p>
<p><a href="..">Back Parent (dir)</a></p>
<br>


<?php
if ( $handle = opendir( "." ))
{
   echo "PHP BIN LS:<br>";
   while ( false != ( $entry = readdir( $handle ) ) )
   {
        echo $entry . "<br>\n";
   }
   closedir( $handle );
}
?>

</body>
</html>
