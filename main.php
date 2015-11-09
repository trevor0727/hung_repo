<?php session_start(); ?>

<!DOCTYPE html>
<html>
<head>
    <title>會員資訊</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
<style type="text/css">

html,body{  
    height: 80%;
    background-color: #A1FFFF;
}
#container {
    position: relative;
    height: 80%;
}
#header {
    background-color:#A1FFFF;
    text-align: center;height: 10%; 
}
.content {
    position: relative;
    /*background-color:#EEEEEE;*/
    height:80%;width:100%;
    float:left;
    margin-top: 0.5cm;
    margin-bottom: 1cm;
}
#left {
    /*background-color:#FF00FF;*/
    height:80%;width:20%;
    float:left;
    margin-top: 0.5cm;
    margin-right: 1cm;
}
</style>
<div id ="header">
    <h1>會員資訊</h1>
</div>
<div align ="right">
    <p><a href ="issue.php"><h3>發表文章</h3></a><p>
    <p><a href ="logout.php"><h3>登出</h3></a><p> 
</div>

<div align ="center">
<h2><p>大頭照上傳</p></h2>
<Form Action ="upload.php" Method ="POST" Enctype ="multipart/form-data">
    <Input Type ="file" Name ="file" ><br>
    <Input Type ="Submit" value =" 開始上傳 ">
</Form> 
<hr>    
</div>

<div id ="container" align ="center">

<?php
include("dbconnect.php");

//用session檔住沒登入的人
if($_SESSION['account'] != null){
        
    $acc =$_SESSION['account'];        
    $sql = "SELECT * FROM member where account ='$acc'";        
    $result = mysql_query($sql) or die('MySQL query error');

}
else {
        echo '您無權限觀看此頁面!';
        
        echo '<meta http-equiv=REFRESH CONTENT=1;url=index.php>';
}
?>


<div id="left">
<?php 
while($row = mysql_fetch_array($result)) {
    $url = $row['pic_name'];
    echo "姓名:".$row['name'].'<br>';
    echo "性別:".$row['sex'].'<br>';
    echo "電話:".$row['phone'].'<br>';
}
?>
<img src ="<?php echo $url;?>">
</div>
<div align="left"><h2>文章列表</h2></div>
<div>

    <table border="1" width="70%">
        <?php 
            $sql_article="SELECT title, content, auth_id FROM article where auth_id='$acc'";
            $result_article = mysql_query($sql_article);

            echo "<tr><td>" . '文章標題' . "</td><td>" . '文章內容' . "</td><td>" . '發佈者' . "</td></tr>";

            while($row = mysql_fetch_array($result_article)) {   
                echo "<tr><td>" . $row['title'] . "</td><td>" . $row['content'] . "</td><td>" . $row['auth_id'] . "</td></tr>";

            }          
        ?> 
    </table>
       
    

</div>


</div>
</body>
</html>