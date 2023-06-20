
<font size=20 color=blue>首頁</font><br><br>
sdfdf<label style='color:blue;font-size:55px'>123</label>sdfsdf
<input type = button onclick="location.href='login.html'" value =按鈕超連結1>
<button onclick="location.href='login.html'">按鈕超連結2</button><br>

<?php
	session_start();
	if (isset($_SESSION["username"]))
		print "<p align=right>歡迎" . $_SESSION["username"] . 
				"您好<a href=logout.php>登山</a></p><br>";
		
	else
		print "<p align=right><a href=login.html>請登入</a></p>";
	
	
?>


<a href=index.php>首頁</a><br>
<a href=stock.php>股市</a><br>
<a href=game.php>遊戲</a><br>
<a href=sport.php>運動</a><br>
<a href=shop.php>購物中心</a><br>

如果session的username的值存在的話
	就印出"john"在這裡，且具有"登出"的超連結
不然的話
	就顯示"未登入"，並且出現"登入"的超連結