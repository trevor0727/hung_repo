<!DOCTYPE html>
<html>
<head>
	<title>會員登入</title>
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
<div id = "header">
	<h1>會員登入</h1>
</div>
<div id = "container">
	<div class ="content" align ="center">
	<form name ="form" method ="post" action ="check.php">
		<h3>帳號</h3><input type ="text" name ="account" /> <br>
		<h3>密碼</h3><input type ="password" name ="password" /> <br>
		<br>
		<input type ="submit" name ="button" value ="登入" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<a href ="register.php">申請帳號</a>
	</form>
	</div>
</div>

</body>
</html>