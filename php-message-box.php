<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
    margin: 0 auto;
    max-width: 800px;
    padding: 0 10px;
}

.container {
    border: 2px solid #dedede;
    background-color: #f1f1f1;
    border-radius: 5px;
    padding: 10px;
    margin: 10px 0;
}

.darker {
    border-color: #ccc;
    background-color: #ddd;
}

.container::after {
    content: "";
    clear: both;
    display: table;
}

.container img {
    float: left;
    max-width: 70px;
    width: 100%;
    margin-right: 20px;
    border-radius: 50%;
}

.container img.right {
    float: right;
    margin-left: 20px;
    margin-right:0;
}

.time-right {
    float: right;
    color: #aaa;
}

.time-left {
    float: left;
    color: #999;
}
</style>
</head>
<body>

<h2>Message Box</h2>


<div class="container">
<font size="5">
<?php
     //$myfile = "text.txt"; 
     $myfile = "php-message-box.txt"; 
     $file = fopen( $myfile , "r");
     while(! feof($file))
     {
        echo "<p>"; 
        $line = fgets($file);
        echo $line . "<br>"; 
        echo "</p>"; 
        echo "\n"; 
     }
     fclose($file);
?>
<span class="time-right">Comment</span>
</font>
</div>
 

</body>
</html>
