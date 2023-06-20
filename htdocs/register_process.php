<?php

	$myuserid=$_REQUEST["userid"]; //$_REQUEST["q"]
	$myuserpwd=$_REQUEST["userpwd"];
	$myuserpwdck=$_REQUEST["userpwdck"];
	$mysex=$_REQUEST["sex"];
	$myyear=$_REQUEST["year"];
	$mymonth=$_REQUEST["month"];
	$myday=$_REQUEST["day"];
	$myemail=$_REQUEST["email"];
	$myaddress=$_REQUEST["address"];
	$myphone=$_REQUEST["phone"];
	
	print "帳號" . $myuserid . "<br>";
	print "密碼" . $myuserpwd . "<br>";
	print "確認密碼" . $myuserpwdck . "<br>";
	print "性別" . $mysex . "<br>";
	print "年" . $myyear . "<br>";
	print "月" . $mymonth . "<br>";
	print "日" . $myday . "<br>";
	print "郵件" . $myemail . "<br>";
	print "地址" . $myaddress . "<br>";
	print "電話" . $myphone . "<br>";

	if ($myuserpwd == $myuserpwdck ){
		
	session_start();
	$_SESSION["username"]=$myuserid;
	
	//connect to dba_close
	require_once 'db.php';
	$sql = "INSERT INTO `user`(`name`, `password`, `email`, `address`, `phone`) VALUES ('".$myuserid."','".$myuserpwd."','".$myemail."','".$myaddress."','".$myphone."')";
	$result = mysqli_query($link,$sql);
	mysqli_close($link);
	}
	else
		print "密碼不一致,請重新輸入";

	//insert into Table....
	if(strlen($myuserid)>1){	
	session_start();
	$_SESSION["username"]=$myuserid;
	//connect to dba_close
	require_once 'db.php';
	$sql = "INSERT INTO `user`(`name`, `password`, `email`, `address`, `phone`) VALUES ('".$myuserid."','".$myuserpwd."','".$myemail."','".$myaddress."','".$myphone."')";
	$result = mysqli_query($link,$sql);
	mysqli_close($link);
	}
	else
		print "帳號沒有填";
	
	
?>

<a href=index.php>回首頁</a>