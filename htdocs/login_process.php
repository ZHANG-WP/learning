<?php

	$myuserid=$_REQUEST["userid"]; //$_REQUEST["q"]
	$myuserpwd=$_REQUEST["userpwd"];
	
	print "帳號" . $myuserid . "<br>";
	print "密碼" . $myuserpwd . "<br>";
//---------------------------------------------------------------

// 載入db.php來連結資料庫
require_once 'db.php';


// 設置一個空陣列來放資料
$datas = array(); 
$isUser=false;
// sql語法存在變數中
//$sql = "SELECT `account`, `name` FROM `user` AS userData WHERE `id`=1 ";
$sql = "select name, password, email, address, phone from user as userData where name='".$myuserid ."' and password='".$myuserpwd . "'";
print $sql;
// 用mysqli_query方法執行(sql語法)將結果存在變數中
$result = mysqli_query($link,$sql);
// 如果有資料
if ($result) {
    // mysqli_num_rows方法可以回傳我們結果總共有幾筆資料
    if (mysqli_num_rows($result)>0){
		$isUser=true;	
        // 取得大於0代表有資料
        // while迴圈會根據資料數量，決定跑的次數
        // mysqli_fetch_assoc方法可取得一筆值
		echo "<table border=1'>";
        while ($row = mysqli_fetch_assoc($result)) {
            // 每跑一次迴圈就抓一筆值，最後放進data陣列中
			echo "<tr>";
			print "<td>" . $row["name"] . "</td>" . "<td>" . $row["password"] . "</td>" ;
			echo "</tr>";
            $datas[] = $row;
        }
		echo "</table>";
    }
    // 釋放資料庫查到的記憶體
    mysqli_free_result($result);
}
else {
    echo "{$sql} 語法執行失敗，錯誤訊息: " . mysqli_error($link);
}
// 處理完後印出資料
if(!empty($result)){
    // 如果結果不為空，就利用print_r方法印出資料
    //print_r($datas);
}
else {
    // 為空表示沒資料
    echo "查無資料";
}

	//
	if ($isUser == true){
		session_start();
		$_SESSION["username"]=$myuserid;
		print "會員" . $_SESSION["username"] . "你好<a href = index.php>跳回首頁</a><br>";
		//header("Location:index.php"); 
		//確保重定向後，後續代碼不會被執行 
		//exit;
	}
	else
		print "帳密錯誤快點重填";
	

?>
C#
javascript
asp.net
python
java
php

