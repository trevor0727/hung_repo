<?php session_start(); ?>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<?php
include("dbconnect.php");

$acc = $_POST['account'];
$pw = md5($_POST['password']);
$pw2 = md5($_POST['password2']);
$name = $_POST['name'];
$sex = $_POST['sex'];
$phone = $_POST['phone'];
$pic_name=$_SESSION['file'];

//判斷帳號密碼是否為空值
//確認密碼輸入的正確性
$sql = "SELECT * FROM member where account = '$acc'";
$result = mysql_query($sql);
$row = @mysql_fetch_row($result);

if ($row[1]==$acc) {
        echo "重複註冊!!!!";
        echo '<meta http-equiv=REFRESH CONTENT=1;url=register.php>';
}
else if($acc != null && $pw != null && $pw2 != null && $pw == $pw2) {
        
        //新增資料進資料庫
        $sql = "insert into member (account, password, name, sex, phone, pic_name) values ('$acc', '$pw', '$name', '$sex', '$phone','$pic_name')";
        if(mysql_query($sql)) {
                echo '新增成功!';
                echo '<meta http-equiv=REFRESH CONTENT=1;url=index.php>';
        }
        else {
                echo '新增失敗!';
                echo '<meta http-equiv=REFRESH CONTENT=1;url=index.php>';
        }
}
else {
        echo '您無法看此頁面!';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=index.php>';
}
?>