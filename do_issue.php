<?session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php include("dbconnect.php"); ?> 
<?php
	$title=$_POST['title'];
	$content=$_POST['content'];
	$id=$_SESSION['account'];
	$time=date("Y-m-d H:i:s");
	$state="1";

	$sql="INSERT INTO article (title, content, time, state, auth_id)VALUES ('$title', '$content', '$time', '$state', '$id')";
	if(mysql_query($sql)) {
                echo '新增成功!';
                echo '<meta http-equiv=REFRESH CONTENT=1;url=main.php>';
        }
        else {
                echo '新增失敗!';
                echo '<meta http-equiv=REFRESH CONTENT=1;url=issue.php>';
        }	

?>