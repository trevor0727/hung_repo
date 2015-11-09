<!DOCTYPE html>

<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<head>
	<title>註冊會員</title>
</head>
<body>
	<form action="register_ok.php" id="form1" name="form1" method="POST">
  <table width="69%" border="1">
    <tr>
      <td colspan="2" align="center">使用者註冊</td>
      
    </tr>
    <tr>
      <td width="37%">使用者帳號</td>
      <td width="63%"><label for="username"></label>
      <input type="text" name="account" id="account" width="200%" /></td>
    </tr>
    <tr>
      <td>密碼</td>
      <td><label for="password"></label>
      <input name="password" type="password" id="password" width="200%"/></td>
    </tr>
    <tr>
      <td>信箱</td>
      <td><label for="email"></label>
      <input type="text" name="email" id="email" width="200%"/></td>
    </tr>
    <tr>
      <td colspan="2" align="center"><input name="authcode" type="hidden" id="authcode" value="<?php echo $authcode=substr(md5(uniqid(rand())),0,8); ?>" />
      <input type="button" name="button2" id="button2" value="登入"  onclick="location.href='index.php'"/>        <input type="submit" name="button" id="button" value="註冊" /></td>
    </tr>
  </table>
  <p>&nbsp;</p>
  <input type="hidden" name="MM_insert" value="form1" />
</form>

</body>
</html>