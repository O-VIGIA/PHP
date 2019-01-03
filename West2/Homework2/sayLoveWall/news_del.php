<?php
//********************删除记录*****************************
//包含连接数据库的文件cont.php
include "cont.php";
//获取地址栏id参数
$id=(int)$_GET["id"];
//构建执行sql删除语句
$sqla="select * from news where id=$id";
$result=mysql_query($sqla);
$arr=mysql_fetch_row($result);
$username=$arr[2];
$sql="delete from news where id=$id";
$result=mysql_query($sql);
if($result){
	//执行成功跳转到success.php
	$url="person.php?username=".$username;
	echo "<script>location.href='success.php?url=$url'</script>";
	exit();
}
else{
	//执行失败跳转到error.php
	echo "<script>location.href='error.php?url=$url'</script>";
	exit();
}
?>