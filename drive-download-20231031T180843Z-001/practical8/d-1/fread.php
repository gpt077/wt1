<?php
$filename="marks.php";
$fp=fopen($filename,"r");
$contents=fread($fp,filesize($filename));
echo"<pre>$contents</pre>";
fclose($fp);
?>
