股市<br>
<?php
	//print $a;
	session_start();
	
	if (isset($_SESSION["a"]))
		print $_SESSION["a"];
	
	if (isset($_SESSION["username"]))
		print $_SESSION["username"];
	else
		print "尚未登入";
?>
