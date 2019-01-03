<!doctype html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta name="Generator" content="EditPlus®">
  <meta name="Author" content="">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
  <title>注册</title>
 </head>
 <body>
  <form name="login" method="post" action="signup.php">
  <table width="500" border="1" bordercolor="#ccc" rules="all" align="center" cellpadding="5" style="margin:100px auto;">
  <tr>
	<th colspan="2" bgColor="#e0e0e0">注册</th>
  </tr>
  <tr>
	<td>用户名：</td>
	<td><input type="text" id="id_name" name="username" required="required"></td>
  </tr>
  <tr>
	<td>密码：</td>
	<td><input type="password" id="password" name="password" required="required"></td>
  </tr>
  <tr>
	<td>重复密码：</td>
	<td><input type="password" id="re_password" name="re_password" required="required"></td>
  </tr>
  <tr>
	<td colspan="2" align="center" style="color:red;font-size:10px">
	<?php
		$err=isset($_GET["err"])?$_GET["err"]:"";
		switch($err){
			case 1:
				echo "用户名已存在！";
			break;
			case 2:
				echo "密码与重复密码不一致！";
			break;
			case 3:
				echo "注册成功！";
				header("location:login.php");
			break;
		}
	
	?>
	</td>
  </tr>
  <tr>
	<td colspan="2" align="center">
		<input type="submit" id="register" name="register" value="注册">
		<input type="reset" id="reset" name="reset" value="重置">
	</td>
  </tr>
  <tr>
	<td colspan="2" align="center">
		如果已有账号,请<a href="login.php">登录</a>吧！
	</td>
  </tr>
  </table>
  </form>
  <?php
	include "footer.php";
  ?>
 </body>
</html>