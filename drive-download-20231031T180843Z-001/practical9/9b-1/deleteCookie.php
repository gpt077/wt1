<?php
setcookie("Auction_Item","Luxury car",time()+2+24*60*60);
?>
<html>
<body>
<?php
setcookie("Auction_Item","",time()-60)
?>
<?php
echo"Cookie is Deleted"
?>
<p>
<strong>Note:</strong>
You might have to reload the page to see the value of the cookie.
</p>
</body>
</html>