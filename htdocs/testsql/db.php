<?php
$host = 'localhost';
$dbuser ='root';
$dbpassword = '';
$dbname = 'member';  //'member_db
$link = mysqli_connect($host,$dbuser,$dbpassword,$dbname);
if($link){
    mysqli_query($link,'SET NAMES utf8');   //'uff8
    echo "正確連接資料庫";
}
else {
    echo "不正確連接資料庫</br>" . mysqli_connect_error();
}
?>