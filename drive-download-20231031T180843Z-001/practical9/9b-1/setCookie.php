<?php
setcookie("Auction_Item","Luxury car",time()+2+24*60*60);
?>
<html>
<body>
<?php
if(isset($_COOKIE["Auction_Item"]))
{
	echo"Auction Item is a ".$_COOKIE["Auction_Item"];
}
else
{
	echo"No Items for Auction.";
}
?>
<p>
<strong>Note:</strong>
You might have to reload the page to see the value of the cookie.
</p>
</body>
</html>









