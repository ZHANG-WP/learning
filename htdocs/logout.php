
<?php
	session_start();
	unset($_SESSION["username"]);


	//header("Location:index.php"); 
	//確保重定向後，後續代碼不會被執行 
	//exit;
?>
<a href=index.php>回到首頁</a>
