<!DOCTYPE html>
<html>
<head>
	<title>發表文章</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>

<div align="center">
	<h2>發表文章</h2>
<hr>
</div>
<div>
<form action="do_issue.php" method="post">
	<p>文章標題：<input type="text" name="title"></p>
	<p>文章内容：<br><textarea name="content" style="width:400px;height:120px;"></textarea></p>
	<p><input type="submit" value="發佈"></p>
</form>
</div>
</body>
</html>