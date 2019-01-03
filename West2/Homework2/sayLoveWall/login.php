<!doctype html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta name="Generator" content="EditPlus®">
  <meta name="Author" content="">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
  <title>登录</title>
 </head>
 <body>
  <form name="login" method="post" action="login_check.php">
  <table width="500" border="1" bordercolor="#ccc" rules="all" align="center" cellpadding="5" style="margin:100px auto;">
  <tr>
	<th colspan="2" bgColor="#e0e0e0">登录</th>
  </tr>
  <tr>
	<td>用户名：</td>
	<td>
     <input type="text" id="name" name="username" required="required"
      value="<?php echo isset($_COOKIE["localhost"])?$_COOKIE["localhost"]:"";?>">
	</td>
  </tr>
  <tr>
	<td>密码：</td>
	<td><input type="password" id="password" name="password"></td>
  </tr>
  <tr>
	<td colspan="2">
		<input type="checkbox" name="remember"><small>记住我
	</td>
  </tr>
  <tr>
	<td colspan="2" align="center" style="color:red;font-size:10px;">
		<?php
			$err=isset($_GET["err"])?$_GET["err"]:"";
			switch($err){
				case 1:
					echo "用户名或密码错误！";
				break;
				case 2:
					echo "用户名或密码不能为空！";
				break;
			}
		?>
	</td>
  </tr>
  <tr>
	<td colspan="2" align="center">
		<input type="submit" id="login" name="login" value="登录">
		<input type="reset" id="reset" name="reset" value="重置">
	</td>
  </tr>
  <tr>
	<td colspan="2" align="center">
		还没账号，快去<a href="index.php">注册</a>吧！	
	</td>
  </tr>
  </table>
  <?php
	include "footer.php";
  ?>
 </body>
</html>