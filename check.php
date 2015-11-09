<?php session_start(); ?>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<?php
include("dbconnect.php");

$acc = $_POST['account'];
$pw = $_POST['password'];

$sql = "SELECT * FROM member where account = '$acc'";

$result = mysql_query($sql);
$row = mysql_fetch_row($result);


//判斷帳號與密碼是否空白
//MySQL資料庫裡是否有這個會員
if ($acc != null && $pw != null && $row[1] == $acc && $row[2] == md5($pw)) {      
        $_SESSION['account'] = $acc;
        echo '登入成功!';
        echo '<meta http-equiv=REFRESH CONTENT=1;url=main.php>';
}
else {
        echo '登入失敗!';
        echo '<meta http-equiv=REFRESH CONTENT=1;url=index.php>';
}
?>