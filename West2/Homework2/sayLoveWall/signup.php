<?php
include "cont.php";
//声明变量
$username = isset($_POST['username'])?$_POST['username']:"";
$password = isset($_POST['password'])?$_POST['password']:"";
$re_password = isset($_POST['re_password'])?$_POST['re_password']:"";

if($password==$re_password){
	$sql="select * from root where username='$username'";
	$result=mysql_query($sql);
	$arr=mysql_fetch_array($result);
	if($username==$arr['username']){
		header("location:index.php?err=1");
	}else{
	$password=md5($password);
	$time=time();
	$sql_insert="insert into root(username,password,creattime) values('$username','$password','$time')";
	mysql_query($sql_insert);
	header("location:index.php?err=3");
	}
}
else{
	header("location:index.php?err=2");
}
	
?>