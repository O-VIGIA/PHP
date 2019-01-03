<?php
//header("content-type:text/html;charset=utf-8");
//0 数据库配置
$db_host="localhost";
$db_user="root";
$db_pwd="root";
$db_name="something";
// 1 PHP连接MySQL
$link=@mysql_connect($db_host,$db_user,$db_pwd);
if(!$link){
	echo "连接mysql失败！";
	exit();
}
//echo "正在连接数据库......<br>";
//2 选择当前数据库
if(!mysql_select_db($db_name)){
	echo "选择数据库失败！";
	exit();
}
//echo "选择数据库{$db_name}......成功！<br>";
/*************************************************************************/
//定义函数
function($arr){
	echo "<br>";
	print_r($arr);
	echo "<br>";
}
?>