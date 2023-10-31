<?php
$fp=fopen('cookie.html','w');
fwrite($fp,'welcome');
fwrite($fp,'to php file write');
fclose($fp);
echo"File written successfully";
?>
