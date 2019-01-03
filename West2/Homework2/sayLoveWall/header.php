<!doctype html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta name="Generator" content="EditPlus®">
  <meta name="Author" content="">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
  <title>header</title>
 </head>
 <body>
 <div width="100%" style="border:1px black solid;background:#ccc;">信息
 <?php
	//开启session
	session_start();
	$username=isset($_SESSION['user'])?$_SESSION['user']:"";
	if(!empty($username)){
?>
<table width="33%" align="right">
<tr>
	<td>Welcome!<?php echo "    ".$username?></td>
	<td><a href="context.php">主页</a></td>
	<td><a href="person.php?username=<?php echo $username?>">个人表白管理</a></td>
	<td><a href="logout.php">退出</a></td>
</tr>
</table>
<?php } ?>
<?php	
	if(empty($username)){
?>
&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;
<a href="login.php">登录</a>
&nbsp;&nbsp;&nbsp;&nbsp;
<a href="index.php">注册</a>
<?php } ?>

 </div>
 </body>
</html>
