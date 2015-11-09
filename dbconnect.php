<?php
// 連結資料庫
$dbhost = "localhost"; //資料庫網址或IP
$dbusername = "root"; //資料庫帳號
$dbuserpassword = "123456"; //資料庫密碼
$default_dbname = "member";//資料庫名稱
$connection = mysql_pconnect($dbhost, $dbusername, $dbuserpassword) or die("無法連結資料庫！");
$db = mysql_select_db($default_dbname, $connection) or die("無法選擇資料庫");
mysql_query("set NAMES utf8");
?>