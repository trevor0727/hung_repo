<?php session_start()?>
<!DOCTYPE html>
<html>
<head>
	<title>註冊會員</title>
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
	text-align: center;height: 20%;	
}
.content {
	position: relative;
	/*background-color:#EEEEEE;*/
	height:80%;width:100%;
	float:left;
	margin-top: 0.5cm;
	margin-bottom: 1cm;
}
</style>
<div id="header">
	<h1>註冊會員</h1>
</div>

<div id="container">
	<div class="content" align="center">
		<form name="form" method="post" action="register_ok.php">
		帳號：<input type="text" name="account" /> <br>
		<br>
		密碼：<input type="password" name="password" /> <br>
		<br>
		確認密碼：<input type="password" name="password2" /> <br>
		<br>
		名子：<input type="text" name="name" /> <br>
		<br>
		性別：<input type="text" name="sex" /> <br>
		<br>
		電話：<input type="int" name="phone" /> <br>
		<br>
		<input type="submit" name="button" value="確定" />
		</form>
	</div>
</div>

</body>
</html>
