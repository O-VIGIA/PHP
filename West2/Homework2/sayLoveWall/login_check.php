<?php
	//包含连接MySQL的文件
	include "cont.php";
	//声明变量
	$username=isset($_POST['username'])?$_POST['username']:"";
	$password=isset($_POST['password'])?$_POST['password']:"";
	$remember=isset($_POST['remember'])?$_POST['remember']:"";
	//判断用户名和密码是否为空
	if(!empty($username) && !empty($password)){
		$sql_select="select * from root where username='$username'";
		//AND password='$password'"
		$result=mysql_query($sql_select);
		$arr=mysql_fetch_array($result);
		$password=md5($password);
		if($password==$arr['password'] && $username==$arr['username']){
			if($remember=="on"){
				//创建cookie
				setcookie("localhost",$username,time()+7*24*3600);
			}
			//开启session
			session_start();
			//创建session
			$_SESSION['user']=$username;
			header("location:context.php");
		}
		else{
			//用户名或密码错误
			header("location:login.php?err=1");
		}
	}
	else{
		//用户名或密码为空
		header("location:login.php?err=2");
	}
?>