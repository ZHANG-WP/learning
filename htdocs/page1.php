奇摩首頁<br>
<?php
	//$a=3;
	session_start();
	$_SESSION["a"]="3"; 
	$_SESSION["username"]="marry";
	print $_SESSION["username"];	
?>
