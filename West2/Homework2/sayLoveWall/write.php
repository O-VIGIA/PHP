<?php
//连接数据库
include "cont.php";
//配置参数
$title=$_POST['title'];
$author=$_GET['author'];
$message=$_POST['text'];
$time=time();
$school=$_POST['school'];
$hits=0;
$url="person.php?username=".$author;
//配置并执行sql语句
$sql_insert="insert into news(title,author,school,hits,time,message) value ('$title','$author','$school','$hits','$time','$message')";
$result=mysql_query($sql_insert);
mysql_error();
if($result){
	echo "<script>location.href='success.php?url=$url'</script>";
}
else{
	header("location:error.php");
}
?>